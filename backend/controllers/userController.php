<?php 
require_once("backend/models/User.php");

	class user{

		public static function main($action){

			 if (!isset($_SESSION["User"]) && $_GET["a"] != "login" && $_GET["a"] != "home")
                    header("location: index.php?c=home&a=login");

	        $_this = new user();
	        
			switch ($action) { 
				case "home":
					$_this->home();
					break;
				case "login":
				    $_this->login();
				    break;	
	
				case "logout":
					$_this->logout();
					break;	
				default:
				    throw new Exception("Accion no definida");	
				
			}
		}
		private function home(){
			require "backend/views/site/home.html";
		}

		private function login(){
			if (isset($_POST["Login"]) && $_POST["Login"]["username"] != "" && $_POST["Login"]["password"] != "") {
                // Iniciar Sesion
                $username = $_POST["Login"]["username"];
                $password_hash = $_POST["Login"]["password"];

                $usuario = new userr();
                $usuario->findByName($username);
                if (password_verify($password_hash,$usuario->password_hash) && $usuario->Roll == "Administrador") {
                    $_SESSION["User"] = $usuario;
                    $_SESSION["Roll"] = "Administrador";

                    echo "soy Administrador";
                    header("location: index.php?c=home&a=home");
                }else if(password_verify($password_hash,$usuario->password_hash) && $usuario->Roll == "Empleado"){
                    $_SESSION["User"] = $usuario;
                    $_SESSION["Roll"] = "Empleado";

                    echo "soy Empleado";
                    header("location: index.php?c=Documento&a=create");

                }else{
                    header("Location: index.php?c=home&a=login&error=true");
                }
            }else{
                require "backend/views/site/login.php";
            }
		}

		private function logout(){
			session_destroy();
			header("location: index.php?c=home&a=login");
		}
	
}
?>