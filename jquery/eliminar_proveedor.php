
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(document).ready(function () {
    $('#eliminar_proveedores').click(function () {
        var url = '../controladores/delete_proveedores.php';
        $.ajax({
                type: "POST",
                //data:{id:target},
                url: url,
                data: $('#eliminar_proveedores').serialize(),
                success: function (data) {
            $('#resultado').html(data);

        }
            });
        });
});
</script>
 <script>
$(function () {
    //Capturar el evento cuando le den click al botón con clase ajax-request
    $(document).on('click', '.ajax-request', function () {
        //Este selector tiene el ID del data-target lo sacamos
        var target = $(this).data('target');

        //Abrimos una conexión ajax y enviamos el valor, se llamará id, esto para que lo puedas recoger en el back
        $.ajax({
                url: '../controladores/delete_proveedores.php',
                method: 'POST',
                data: {id: target},
                success: function (respuesta) {
            alert(respuesta)
                }
            });
        });
});
</script>


