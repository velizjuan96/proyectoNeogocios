<?php
/**
 * Created by PhpStorm.
 * User: nehem
 * Date: 02/08/2018
 * Time: 18:45
 */
session_start();
$conexion=new mysqli('localhost','root','','eladeria');
switch ($_GET['option']){
    case "login":
        $user =mysqli_real_escape_string($conexion, $_POST['user']);
        $pass =mysqli_real_escape_string($conexion, $_POST['pass']);
        if ($user == null || $pass == null){
            echo '<p>Porfavor complete todos los campos</p>';
        }else{
            $sql = "select * from usuarios where (usuario='".$user."' and clave='".$pass."')";
            $rs = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($rs) > 0){
                while ($row = mysqli_fetch_array($rs)){
                    if ($row['estado']=='Inactivo'){
                        echo '<p>No puede aceder al sistema, contacte al Administrador!</p>';
                    }else{
                        $_SESSION['iduser']=$row['id_usuario'];
                        $_SESSION['user']=$row['usuario'];
                        $_SESSION['nombre']=$row['nombre'];
                        $_SESSION['apellido']=$row['apellido'];
                        $_SESSION['estado']=$row['estado'];
                        $_SESSION['tipo_usuario']=$row['tipo_usuario'];
                        $_SESSION['logged']=true;
                        echo '<script>location.href="index.php"</script>';

                    }
                }
            }
            else{
                echo '<p>El usuario o clave son incorrectos</p>';
            }
        }
        break;

    case "logout":
        unset($_SESSION['iduser']);
        unset($_SESSION['user']);
        unset($_SESSION['logged']);
        session_destroy();
        header("Location: login.html");
        break;

}