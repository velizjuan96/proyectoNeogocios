<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>
<!-- este es el boton de insertar -->
<script>
    $(document).ready(function () {
        //$('#contenido').addClass('contenido');
        $('#btn-ingresar').click(function () {
            var url = '../controladores/insert_ventas.php';
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
<!-- aqui finaliza el boton de insertar-->

<!-- este es el boton de eliminar -->
<script>
    $(document).ready(function () {
        //$('#contenido').addClass('contenido');
        //var target = $(this).data('data-target');
        $('#eliminar').click(function () {
            var url = '../controladores/delete_ventas.php';
            $.ajax({
                type: "POST",
                //data:{id:target},
                url: url,
                data: $('#eliminar').serialize(),
                success: function (data) {
                    $('#resultado').html(data);
                }
            });
        });
    });


    //Función cuando el DOM esté listo
    $(function () {
        //Capturar el evento cuando le den click al botón con clase ajax-request
        $(document).on('click', '.ajax-request', function () {
            //Este selector tiene el ID del data-target lo sacamos
            var target = $(this).data('target');

            //Abrimos una conexión ajax y enviamos el valor, se llamará id, esto para que lo puedas recoger en el back
            $.ajax({
                url: '../controladores/delete_ventas.php',
                method: 'POST',
                data: {id: target},
                success: function (respuesta) {
                    alert(respuesta)
                }
            });
        });
    });
</script>
<!-- aqui finaliza el boton de eliminar -->
















