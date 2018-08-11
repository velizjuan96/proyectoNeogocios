<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            //$('#contenido').addClass('contenido');
            $('#ingresar_proveedor').click(function () {
                var url = '../controladores/insert_proveedor.php';
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
