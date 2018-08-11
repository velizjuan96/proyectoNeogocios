
<?php
include '../jquery/insertar_proveedor.php'
?>

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Registro de Nuevo Proveedor</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-6">
                    <form id="formulario" method="post">
                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nombre</label>
                            </i>
                            <input type="text" id="orangeForm-name" name="nombre" class="form-control validate">

                        </div>

                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Direccion</label>
                            </i>
                            <input type="text" id="orangeForm-name" name="direccion" class="form-control validate">

                        </div>


                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Telefono</label>
                            </i>
                            <input type="text" id="orangeForm-name" name="telefono" class="form-control validate">

                        </div>


                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Correo</label>
                            </i>
                            <input type="text" id="orangeForm-name" name="correo" class="form-control validate">

                        </div>

                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">fax</label>
                            </i>
                            <input type="text" id="orangeForm-name" name="fax" class="form-control validate">

                        </div>






                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Fecha de registro</label>
                            </i>
                            <input type="date" id="orangeForm-name" name="fecha_registro" class="form-control validate">

                        </div>
                 <br>
                        <br>
                        <div class="md-form mb-5">
                            <textarea name="message" rows="10" name="descripcion" cols="30" class="form-control validate" placeholder="Descripcion"></textarea>
                        </div>

                    </form>



                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-deep-orange" id="ingresar_proveedor">Enviar</button>
                </div>
            </div>
        </div>
    </div>
                <div id="resultado"></div>

