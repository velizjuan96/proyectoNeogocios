


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


<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Producto</th>
        <th scope="col">Fecha de venta</th>
        <th scope="col">Cantidad</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>


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

                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text">
                        <label data-error="wrong" data-success="right" for="orangeForm-name">Producto</label>
                    </i>
                    <input type="text" id="orangeForm-name" name="producto" class="form-control validate">

                </div>

                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text">
                        <label data-error="wrong" data-success="right" name="cantidad" for="orangeForm-name">Cantidad</label>
                    </i>
                    <input type="text" id="orangeForm-name" class="form-control validate">

                </div>


                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text">
                        <label data-error="wrong" data-success="right" for="orangeForm-name">Precio</label>
                    </i>
                    <input type="text" id="orangeForm-name" class="form-control validate">

                </div>



                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text">
                        <label data-error="wrong" data-success="right" for="orangeForm-name">Fecha de la venta</label>
                    </i>
                    <input type="date" id="orangeForm-name" class="form-control validate">

                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange" id="btn-ingresar" >Enviar</button>
            </div>

            <div id="resultado"></div>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="" class="btn btn-primary btn-lg" style="Position:Absolute; left:5%; top:20%" data-toggle="modal"
       data-target="#modalRegisterForm">Nueva Venta</a>
</div>
<!-- /.modal-dialog -->
</div>


