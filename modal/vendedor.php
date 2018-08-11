
<?php
include '../jquery/insertar_vendedor.php'
?>

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Registro de Nuevo Vendedor</h4>
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
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Apellido</label>
                            </i>
                            <input type="text" id="orangeForm-name" name="apellido" class="form-control validate">

                        </div>


                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Identidad</label>
                            </i>
                            <input type="text" id="orangeForm-name" name="identidad" class="form-control validate">

                        </div>


                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Telefono
                                        </label>
                            </i>
                            <input type="text" id="orangeForm-name" name="telefono" class="form-control validate">

                        </div>

                        <div class="md-form mb-5">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Sexo</label>
                            </div>
                            <select class="form-control" name="sexo"  id="inputGroupSelect01"  >
                                <option selected>Seleccione</option>
                                <option value="1">F</option>
                                <option value="2">M</option>

                            </select>
                        </div>

                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Fecha contratacion
                                </label>
                            </i>
                            <input type="date" id="orangeForm-name" name="fecha" class="form-control validate">

                        </div>

                    </form>



                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-deep-orange" id="ingresar_vendedor">Enviar</button>
                </div>


            </div>
        </div>
    </div>

