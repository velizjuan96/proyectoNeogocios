
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<!-- este es el boton de insertar -->
<script>
    $(document).ready(function () {
        //$('#contenido').addClass('contenido');
        $('#editar_producto').click(function () {
            var url = '../controladores/editar_producto.php';
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















