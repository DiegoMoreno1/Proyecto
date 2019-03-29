<?php 
	class homeController{

		public static function main($action){

	        $_this = new homeController();
	        
			switch ($action) { //aqui depediendo de la accion que se utilize nos manda al home o al login  o logout si no encuentra ninguna nos va a parecer accion no definida!  
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
			require "Vistas/home.php";//aqui requerimos todo la vista de home!
		}

		private function Login(){

		
			if (isset($_POST["Login"])) { //aqui el login si el documento y la contraseña son verdaderos entonces nos dejara ingresar al home!
				$rol = $_POST["Login"]["username"];
				$pas = $_POST["Login"]["password"];
				$Usuario = new user();
				$Usuario->findbydocument($rol);
				if (password_verify( $pas,$Usuario->rol)) {
					$_SESSION["Usuarios"]= $Usuario;
					$_SESSION["Roll"]= $Usuario;
					if ($_SESSION["Perfil"]!="uno"  ) {
						header("location:index.php?c=home");
	
				}else{
					$_SESSION["Roll"] != "dos";
					header("location: index.php?c=home&a=home"); 
				}
			}else{
				header("location:index.php?$c=home&a=Login&error=true");//y si es incorrecta la contraseña  entonces nos dara error y nos volvera al login!
			}
		}else{
			require "Vistas/home.php";
		}
	}	
		private function logout(){
			session_destroy();
			header("location: index.php?c=home&a=login");
		}
	
}
?>