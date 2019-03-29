<?php
require_once("Conexion.php");

class Userr extends Conexion{

	Public $id;
	public $username;
	Public $password_hash;
	public $Roll;
	

	public function __construct(){
	parent::__construct();
}


public function findByName($use){
		$conexion = $this->getConexion();
		$stm = $conexion->prepare("SELECT * FROM user WHERE username = :use");
		$stm ->setFetchMode(PDO::FETCH_INTO,$this);

		$stm->bindParam(":use",$use);
		$stm-> execute();
		$stm->fetch();
}


}

?>