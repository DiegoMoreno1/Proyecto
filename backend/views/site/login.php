<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar Sesi&oacute;n</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="backend/assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="backend/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="backend/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="backend/assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="backend/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="backend/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="backend/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="backend/assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="backend/assets/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" autocomplete="off">
					<span class="login100-form-title">
						Ingreso de Miembros
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Porfavor llene el campo">
						<input class="input100" type="text" name="Login[username]" placeholder="Usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Porfavor llene el campo">
						<input class="input100" type="password" name="Login[password]" placeholder="Contrase&ntilde;a">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div align="center" >
						<?php 
							if (isset($_GET["error"])) {
							echo "<a> Datos Incorrectos </a>";
							}
	 					?>	
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Iniciar Sesi&oacute;n
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							¿Olvid&oacute;
						</span>
						<a class="txt2" href="#">
							su nombre de usuario / contraseña?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Crea tu cuenta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="backend/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="backend/assets/vendor/bootstrap/js/popper.js"></script>
	<script src="backend/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="backend/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="backend/assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="backend/assets/js/main.js"></script>

</body>
</html>