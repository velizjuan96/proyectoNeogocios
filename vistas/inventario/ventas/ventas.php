<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <script src="funcion.js"></script>


    <script>
        $(document).ready(function () {
            //$('#contenido').addClass('contenido');
            $('#btn-ingresar').click(function () {
                var url = './controlador/ventas.php';
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $('#formulario').serialize(),
                    success: function (data) {
                        $('#resultado').html(data);
                    }
                });
            });
        });
    </script>


</head>


<div class="container-fluid">
    <ol class="breadcrumb">
        <li><a href="./">Inicio</a></li>
        <li><a class="active" href="#">Ventas</a></li>
    </ol>
</div>

<br>
<br>
<br>
<br>
<br>
<br>


<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Clientes</div>
                <div class="panel-body">
                    <div class="col-md-12 ">
                        <?php

                        $conexion = new PDO("mysql:host=127.0.0.1;dbname=eladeria", "root", "");

                        $busqueda = $conexion->query("Select * from ventas");
                        $arrDatos = $busqueda->fetchAll(PDO::FETCH_ASSOC);

                        ?>

                        <table class="table table-striped table-condensed" id="datos">
                            <th class="bg-primary" scope="col">Id</th>
                            <th class="bg-primary" scope="col">producto</th>
                            <th class="bg-primary" scope="col">precio</th>
                            <th class="bg-primary" scope="col">cantidad</th>
                            <th class="bg-primary" scope="col">Fecha de venta</th>
                            <th class="bg-primary" scope="col">Opciones</th>
                            <?php

                            /* var_dump($arrDatos);*/
                            foreach ($arrDatos as $muestra) {
                                echo '<tr>';

                                echo '<td >' . $muestra['Id'] . '</td>';
                                echo '<td >' . $muestra['producto'] . '</td>';
                                echo '<td >' . $muestra['precio'] . '</td>';
                                echo '<td >' . $muestra['cantidad'] . '</td>';
                                echo '<td >' . $muestra['fecha_venta'] . '</td>';

                                echo '<td>
                  <a class="btn btn-danger ajax-request" id="eliminar"  data-target="' . $muestra['Id'] . '">   
                  <i class="fa fa-trash"></i>
                  </a>
                <a class="btn btn-primary ajax-request" data-target="' . $muestra['Id'] . '">
                  <i class="fa fa-pencil"></i>
                  </a>
                  <a class="btn btn-success ajax-request" data-target="' . $muestra['Id'] . '">
                  <i class="fa fa-search"></i>
                  </a>
                 </td>';
                                echo ' </tr>';

                            }
                            ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Registro de Nueva Venta</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-6">
                    <form id="formulario" method="post">
                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Producto</label>
                            </i>
                            <input type="text" id="orangeForm-name" name="producto" class="form-control validate">

                        </div>

                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Cantidad</label>
                            </i>
                            <input type="text" id="orangeForm-name" name="cantidad" class="form-control validate">

                        </div>


                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Precio</label>
                            </i>
                            <input type="text" id="orangeForm-name" name="precio" class="form-control validate">

                        </div>


                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Fecha de la
                                    venta</label>
                            </i>
                            <input type="date" id="orangeForm-name" name="fecha" class="form-control validate">

                        </div>

                    </form>

                    <div id="resultado"></div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-deep-orange" id="btn-ingresar">Enviar</button>
                </div>


            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="" class="btn btn-primary btn-lg" style="Position:Absolute; left:5%; top:20%" data-toggle="modal"
           data-target="#modalRegisterForm">Nueva Venta</a>
    </div>
    <!-- /.modal-dialog -->
</div>



