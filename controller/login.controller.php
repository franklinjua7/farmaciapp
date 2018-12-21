<?php 
require_once 'model/users.php';

Class LoginController{

	private $model;

	public function __CONSTRUCT(){

	}

	public function Index(){

		require_once 'view/login/login.php';
	}

	public function IniciarSesion(){
		if (isset($_POST["usuario"])) {
			# Validamos la contraseña
			if (isset($_POST["password"])) {
				# Ahora ya estamos adento
				$this->model = new User();

				$data = $this->model->Datos_Sesion($_POST["usuario"], $_POST["password"]);

				if ($data["nRetorno"] == 1) {
					# Cogemos los datos del array ARR que hemos enviado y lo insertamos en $_SESSION
					$_SESSION['user'] = $data['Nombres']." ".$data['ApellidoPaterno']." ".$data['ApellidoMaterno'];
					$_SESSION['Nombres'] = $data["Nombres"];
					$_SESSION['ApellidoPaterno'] = $data["ApellidoPaterno"];
					$_SESSION['ApellidoMaterno'] = $data["ApellidoMaterno"];
					$_SESSION['sexo_id'] = $data["sexo_id"];
					$_SESSION['estado_id'] = $data["estado_id"];
					$_SESSION['FechaNacimiento'] = $data["FechaNacimiento"];
					$_SESSION['Celular'] = $data["Celular"];
					$_SESSION['dni'] = $data["dni"];
					$_SESSION['user_id'] = $data["user_id"];
					$_SESSION['emailid'] = $data["email"];
					$_SESSION['users_tipos_id'] = $data["tipo_usuario"];

					//Mostramos las vistas que siguen
					require_once 'view/inicio/inicio.php';
					require_once 'view/footer.php';
				}
			} else {
				echo "Variable de PASSWORD NO ENCONTRADA";
			}
		} else {
			echo "Variable de EMAIL NO ENCONTRADA";
		}
	}


	public function CerrarSesion(){
		//Destrumos la sesión que hemos creado
		session_destroy();
		header("Location:../index.php");
	}

	public function Registrar(){
		require_once 'view/login/registro.php';
		require_once 'view/footer.php';
	}
}

?>