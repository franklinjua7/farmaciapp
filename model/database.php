<?php 
	
$db_host = "localhost";
$db_name = "farmaciapp"; 
$db_username = "root"; 
$db_password = "";

class Database{

	public static function StartUp(){

		$pdo= new PDO('mysql:host=localhost;dbname=farmaciapp;charset=utf8', 'root', '');

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
}

?>