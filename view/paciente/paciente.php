<h1 class="page-header">Pacientes</h1>
<div class="well well-sm text-right">
	<a href="?c=Paciente&a=Crud" class="btn btn-primary">Nuevo Paciente</a>
</div>

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h3 class="text-center">
			<strong><i class="fa fa-list" aria-hidden="true"></i>&nbsp; Listado de Pacientes &nbsp;
				<i class="fa fa-list" aria-hidden="true"></i>
			</strong>
		</h3>
		<a class="btn btn-primary" href="..\?c=Paciente&a=RegistrarPaciente">Registrar Paciente</a>
		<a class="btn btn-success" href="..\?c=Paciente&a=ReportePaciente">Generar PDF</a>
		<div class="table-responsive" id="lista-paciente">
			<table class="table table-hover" id="tbl-paciente">
				<thead>
					<tr>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="id" data-type="numeric">id</th>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="nombre_paciente">Nombres</th>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="apellidos" data-type="numeric">Apellidos</th>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="dni">DNI</th>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="fechaNacimiento">Fecha Nacimiento</th>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="estadoCivil">Estado Civil</th>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="sexo">Sexo</th>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="commands" data-formatter="commands" 
						data-sortable="false">Acciones</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>
