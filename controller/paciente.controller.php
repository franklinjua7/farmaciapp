<?php 

require_once 'model/paciente.php';

Class PacienteController{

	private $model;

	public function __CONSTRUCT(){
		$this->model = new Paciente();
	}

	public function Index(){

		require_once 'view/inicio/inicio.php';
		require_once 'view/paciente/paciente.php';
		require_once 'view/footer.php';
	}

	public function RegistrarPaciente(){

		require_once 'view/inicio/inicio.php';
		require_once 'view/paciente/registrarpaciente.php';
		require_once 'view/footer.php';
	}

	public function GuardarPaciente(){

		$paciente =  new Paciente();
		//var_dump($_REQUEST);

		$paciente->apellidoPaterno = $_REQUEST['apellido_paterno'];
		$paciente->apellidoMaterno = $_REQUEST['apellido_materno'];
		$paciente->nombres = $_REQUEST['nombres'];
		$paciente->dni = $_REQUEST['dni'];
		$paciente->estadoCivil = $_REQUEST['estado_civil'];
		$paciente->sexo = $_REQUEST['sexo'];
		$paciente->fechaNacimiento = $_REQUEST['fecha_nacimiento'];
		$paciente->lugarNacimiento = $_REQUEST['lugar_nacimiento'];

		$response = $this->model->Registrar($paciente);

		header('Location: /?c=Paciente&a=Index');
	}

}

?>