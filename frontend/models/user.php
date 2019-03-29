<?php 

public function findByDocument($rol){
		$stm = $conexion->prepare("SELECT * FROM user WHERE Roll = :rol");
		$stm ->setFetchMode(PDO::FETCH_INTO,$this);

		$stm->bindParam(":rol",$rol);
		$stm-> execute();
		$stm->fetch();
}

 ?>