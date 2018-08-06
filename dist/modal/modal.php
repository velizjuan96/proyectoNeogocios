
<?php
include '../jquery/funciones.php'
?>

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



                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-deep-orange" id="ingresar">Enviar</button>
                </div>


            </div>
        </div>
    </div>

