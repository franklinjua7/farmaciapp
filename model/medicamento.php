<?php 

Class Medicamento{

	private $pdo;
	public $nombre_generico;
	public $nombre_comercial;
	public $descripcion;
	public $precio_venta;
	public $precio_compra;
	public $cantidad_producto_inicial;

	public function __CONSTRUCT(){
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Listar(){
		try {
			$query = $this->pdo->prepare("SELECT * FROM medicamentos");
			$query->execute();

			return $query->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(Medicamento $data){
		try {
			$query = "INSERT INTO medicamentos (nombre_generico, nombre_comercial, descripcion, precio_venta, precio_compra, cantidad_producto_inicial) VALUES(?,?,?,?,?,?)";

			$this->pdo->prepare($query)->execute(array(
				$data->nombre_generico,
				$data->nombre_comercial,
				$data->descripcion,
				$data->precio_venta,
				$data->precio_compra,
				$cantidad_producto_inicial
			));
		} catch (Exception $e) {
			die($e->getMessage());
		}

	}

}

?>