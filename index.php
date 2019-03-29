<?php

$action = "admin";//accion por defecto
$controller = "home";//controlador por defecto 
if (isset($_GET["a"])) 
	$action = $_GET["a"];


if (isset($_GET["c"])) 
	$controller = $_GET["c"];


switch ($controller) {

	case "Documento":
		require "Controladores/DocumentoController.php";
		DocumentoController::main($action);
	    break;

	default://controlador de inicio
			require "backend/controllers/userController.php";
			//accion estatica ::
			user::main($action);
	}

 ?>
 