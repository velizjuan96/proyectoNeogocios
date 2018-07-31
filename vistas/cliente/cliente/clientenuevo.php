<div class="container-fluid">
	<ol class="breadcrumb">
		<li><a href="./">Inicio</a></li>
		<li><a class="ajax-request" href="/cliente/cliente/cliente.php">Cliente</a></li>
    <li><a class="active" href="#">Cliente Nuevo</a></li>
	</ol>
</div>
<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Cliente Nuevo</div>
        <div class="panel-body">
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
            <form method="post" action="#" id="formulario">
              <div class="col-sm-12">
                <label class='control-sidebar-subheading' for="fecha">Nombre</label>
                <input type="text" name="nombre" id="nombre" required maxlength="255" class="form-control"/>
              </div>
							<div class="col-sm-12">
								<label class='control-sidebar-subheading' for="fecha">RTN</label>
								<input type="text" name="rtn" id="rtn" required maxlength="255" class="form-control"/>
							</div>
							<div class="col-sm-6">
								<label class='control-sidebar-subheading' for="fecha">Dias de Credito</label>
								<input type="number" name="dias_credito" id="dias_credito" required maxlength="255" class="form-control"/>
							</div>
							<div class="col-sm-6">
								<label class='control-sidebar-subheading' for="fecha">Limite de Credito</label>
								<input type="number" name="limite_credito" id="limite_credito" required maxlength="255" class="form-control"/>
							</div>
							<div class="col-sm-12">
								<label class='control-sidebar-subheading' for="fecha">Forma de pago</label>
								<input type="text" name="forma_pago" id="forma_pago" required maxlength="255" class="form-control"/>
							</div>
							<div class="col-sm-12">
								<label class='control-sidebar-subheading' for="fecha">Direccion</label>
								<input type="text" name="direccion" id="direccion" required maxlength="255" class="form-control"/>
							</div>
							<div class="col-sm-12">
								<label class='control-sidebar-subheading' for="fecha">Telefono</label>
								<input type="text" name="telefono" id="telefono" required maxlength="255" class="form-control"/>
							</div>
							<div class="col-sm-12">
								<label class='control-sidebar-subheading' for="fecha">Correo</label>
								<input type="text" name="correo" id="correo" required maxlength="255" class="form-control"/>
							</div>


              <div class="col-sm-12">
                <br>
                <input type="submit" class="btn btn-primary" value="Enviar" disabled />
              </div>
            </form>
          </div>
          <div class="col-md-4">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $('input[type="submit"]').removeAttr('disabled');
});
$("#formulario").submit(function( event ) {
  event.preventDefault();
  $.ajax({
    type:"POST",
    url:  './controlador/clientecrear.php',
    data:$("#formulario").serialize(),
    dataType: 'html',
    success: function(data){
      //var obj = jQuery.parseJSON( data);
      if(data=="Ok"){
        swal({
          title: "<small>¡Informacion!</small>",
          text: " Registro creado correctamente ",
          html: true,
          confirmButtonText: "Cerrar",
        });
        $('input[type="submit"]').attr("disabled", "true");
      }else{
        swal({
          title: "<small>¡Informacion!</small>",
          text: " Error ",
          html: true,
          confirmButtonText: "Cerrar",
        });
        $('input[type="submit"]').removeAttr('disabled');
      }

      //var json = $.parseJSON(data);

    },
    error: function(data){
        $('input[type="submit"]').removeAttr('disabled');
     console.log(data);
    }
  });
});
</script>
