<?php 

Class User{

	private $pdo;

	public function __CONSTRUCT(){
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Datos_Sesion($usuario, $contraseña){
		try {
			$query = $this->pdo->prepare("SELECT * FROM users WHERE usuario = ? AND password = ?");
			$query->execute(array($usuario, $contraseña));

			$data = $query->fetch(PDO::FETCH_ASSOC);

			$tipo_usuario=0;
			$id_usuario=0;

			$arr=array('nRetorno'=> -1, 'cMensajeRetorno'=>'',
						'Nombres'=> '',
						'ApellidoPaterno'=> '',
						'ApellidoMaterno'=> '',
						'sexo_id'=> 0,
						'estado_id' => 0,
						'FechaNacimiento' => '',
						'Celular' => '',
						'dni' => '',
						'user_id' => 0,
						'email'=> '',
						'tipo_usuario'=>'');

			if ($data) {
				# Validasmos

				$tipo_usuario = $data['users_tipos_id'];
				$id_usuario = $data['id'];

				switch ($tipo_usuario) {
					case 1: //Supervisor
						# code...
						break;
					case 2: //Farmaceutico
						# code...
						break;
					case 3: //Yo como administrador
						# code...
						$arr["Nombres"] = "Franklin";
						$arr["ApellidoPaterno"] = "Juárez";
						$arr["ApellidoMaterno"] = "Román";
						$arr["sexo_id"] = 1;
						$arr["estado_id"] = 1;
						$arr["FechaNacimiento"] = "07-07-1993";
						$arr["Celular"] = "990 394 638";
						$arr["dni"] = "48010354";
						$arr["user_id"] = 1;
						$arr["email"] = "franjua.123@gmail.com";
						$arr["tipo_usuario"] = $tipo_usuario;
						break;
					case 4: //Nadie, invitado
						# code...
						break;
					default:
						# code...
						break;
				}
				$arr["nRetorno"] = 1;
			} else {
				//Datos incorrectos
				$arr["nRetorno"] = -1;
				$arr["cMensajeRetorno"] = "Datos Incorrectos";
			}

			//Regresamos el ARRAY creado con los datos a utilizar
			return $arr;

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

}

?>