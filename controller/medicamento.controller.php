<?php 

require_once 'model/medicamento.php';

Class MedicamentoController{

	private $model;

	public function __CONSTRUCT(){
		$this->model = new Medicamento();
	}

	public function Index(){

		require_once 'view/inicio/inicio.php';
		require_once 'view/medicamento/medicamento.php';
		require_once 'view/footer.php';
	}

	public function RegistrarMedicamento(){

		require_once 'view/inicio/inicio.php';
		require_once 'view/medicamento/registrarmedicamento.php';
		require_once 'view/footer.php';

	}

	public function GuardarMedicamento(){
		$medicamento = new Medicamento();

		$medicamento->nombre_generico = $_REQUEST['nombre_generico'];
		$medicamento->nombre_comercial = $_REQUEST['nombre_comercial'];
		$medicamento->descripcion = $_REQUEST['descripcion'];
		$medicamento->precio_venta = $_REQUEST['precio_venta'];
		$medicamento->precio_compra = $_REQUEST['precio_compra'];
		$medicamento->cantidad_producto_inicial = $_REQUEST['cantidad_producto_inicial'];

		$response = $this->model->Registrar($medicamento);
		header('Location: /?c=Medicamento&a=Index');
	}
}

?>