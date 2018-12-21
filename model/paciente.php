<?php 

Class Paciente{

	private $pdo;

	public $apellidoPaterno;
	public $apellidoMaterno;
	public $nombres;
	public $dni;
	public $fechaNacimiento;
	public $lugarNacimiento;
	public $estadoCivil;
	public $sexo;

	public function __CONSTRUCT(){
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Listar(){
		try {
			
		} catch (Exception $e) {
			
		}
	}

	public function Registrar(Paciente $data){
		try {
			$sql = "INSERT INTO pacientes(apellido_paterno, apellido_materno, nombres, dni, fecha_nacimiento, lugar_nacimiento, estado_civil, sexo) VALUES (?,?,?,?,?,?,?,?)";
			$this->pdo->prepare($sql)->execute(array(
				$data->apellidoPaterno,
				$data->apellidoMaterno,
				$data->nombres,
				$data->dni,
				$data->fechaNacimiento,
				$data->lugarNacimiento,
				$data->estadoCivil,
				$data->sexo
			));
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}


?>