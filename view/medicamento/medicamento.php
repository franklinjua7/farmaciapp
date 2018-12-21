<h1 class="page-header">Medicamentos</h1>
<div class="well well-sm text-right">
	<a href="?c=Medicamento&a=Crud" class="btn btn-primary">Nuevo Medicamento</a>
</div>

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h3 class="text-center">
			<strong><i class="fa fa-list" aria-hidden="true"></i>&nbsp; Listado de Medicamentos &nbsp;
				<i class="fa fa-list" aria-hidden="true"></i>
			</strong>
		</h3>
		<a class="btn btn-primary" href="..\?c=Medicamento&a=RegistrarMedicamento">Registrar Medicamento</a>
		<a class="btn btn-success" href="..\?c=Medicamento&a=ReporteMedicamento">Generar PDF</a>
		<div class="table-responsive" id="lista-medicamento">
			<table class="table table-hover" id="tbl-medicamento">
				<thead>
					<tr>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="id" data-type="numeric">id</th>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="nombre_generico">Nombre Genérico</th>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="nombre_comercial">Nombre Comercial</th>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="descripcion">Descripción</th>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="precio_venta">Precio Venta</th>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="precio_compra">Precio Compra</th>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="cantidad_producto_inicial">Cantidad Inicial</th>
						<th class="text-center" style="vertical-align: middle;" 
						data-column-id="commands" data-formatter="commands" 
						data-sortable="false">Acciones</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>
