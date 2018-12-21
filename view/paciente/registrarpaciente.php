<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Paciente">Paciente</a></li>
  <li class="active">Nuevo Paciente</li>
</ol>

<form id="frm-paciente" action="?c=Paciente&a=GuardarPaciente" method="post" enctype="multipart/form-data">
	<fieldset>
		<section>
			<div class="row form-group">
				<div class="col-xs-12 col-sm-4">
					<label for="apellido_paterno">Apellido Paterno</label>
					<input type="text" id="apellido_paterno" name="apellido_paterno" required class="form-control text-center" placeholder="Apellido Paterno" value="">
				</div>

				<div class="col-xs-12 col-sm-4">
					<label for="apellido_materno">Apellido Materno</label>
					<input type="text" id="apellido_materno" name="apellido_materno" required class="form-control text-center" placeholder="Apellido Materno" value="">
				</div>

				<div class="col-xs-12 col-sm-4">
					<label for="apellido_paterno">Nombres</label>
					<input type="text" id="nombres" name="nombres" required class="form-control text-center" placeholder="Nombres" value="">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-xs-12 col-sm-4">
					<label for="dni">DNI</label>
					<input type="text" id="dni" name="dni" required class="form-control text-center" placeholder="DNI" value="">
				</div>

				<div class="col-xs-12 col-sm-4">
					<label for="estado_civil">Estado Civil</label>
					<input type="text" id="estado_civil" name="estado_civil" required class="form-control text-center" placeholder="Estado Civil" value="">
				</div>

				<div class="col-xs-12 col-sm-4">
					<label for="sexo">Sexo</label>
					<input type="text" id="sexo" name="sexo" required class="form-control text-center" placeholder="Sexo" value="">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-xs-12 col-sm-6">
					<label for="fecha_nacimiento">Fecha Nacimiento</label>
					<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required class="form-control text-center" placeholder="Fecha de Nacimiento" value="">
				</div>

				<div class="col-xs-12 col-sm-6">
					<label for="lugar_nacimiento">Lugar de Nacimiento</label>
					<input type="text" id="lugar_nacimiento" name="lugar_nacimiento" required class="form-control text-center" placeholder="Lugar de Nacimiento" value="">
				</div>
			</div>			
		</section>
		
		<section>
			<div class="text-right">
        		<button type ="submit" class="btn btn-success">Guardar</button>
    		</div>		
		</section>
	</fieldset>

</form>