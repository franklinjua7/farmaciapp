<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Medicamento">Medicamento</a></li>
  <li class="active">Nuevo Medicamento</li>
</ol>

<form id="frm-medicamento"	action="?c=Medicamento&a=GuardarMedicamento" method="post" enctype="multipart/form-data">
	<fieldset>
		<section>
				<div class="row form-group">
					<div class="col-xs-12 col-sm-6">
						<label for="nombre_generico">Nombre Genérico</label>
						<input type="text" id="nombre_generico" name="nombre_generico" required class="form-control text-center" placeholder="Nombre Genérico" value="">
					</div>

					<div class="col-xs-12 col-sm-6">
						<label for="nombre_comercial">Nombre Comercial</label>
						<input type="text" id="nombre_comercial" name="nombre_comercial" required class="form-control text-center" placeholder="Nombre Comercial" value="">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-xs-12 col-sm-12">
						<label for="descripcion">Descripción</label>
						<input type="text" id="descripcion" name="descripcion" required class="form-control text-left" placeholder="Descripción" value="">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-xs-12 col-sm-4">
						<label for="precio_venta">Precio Venta</label>
						<input type="text" id="precio_venta" name="precio_venta" required class="form-control text-center" placeholder="Precio Venta" value="">
					</div>

					<div class="col-xs-12 col-sm-4">
						<label for="precio_compra">Precio Compra</label>
						<input type="text" id="precio_compra" name="precio_compra" required class="form-control text-center" placeholder="Precio Compra" value="">
					</div>

					<div class="col-xs-12 col-sm-4">
						<label for="cantidad_producto_inicial">Cantidad Producto Inicial</label>
						<input type="text" id="cantidad_producto_inicial" name="cantidad_producto_inicial" required class="form-control text-center" placeholder="Cantidad Producto Inicial" value="">
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