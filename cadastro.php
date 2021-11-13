<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="res/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="res/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="res/css/util.css">
	<link rel="stylesheet" type="text/css" href="res/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Cadastre-se
					</span>
					<span class="login100-form-title p-b-48">
						<img src="logo.png" alt="logo" width="100px" height="50%" class="foto">
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Digite um nome">
						<input class="input100" type="text" name="nome">
						<span class="focus-input100" data-placeholder="Nome"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Digite um número válido">
						<input class="input100" type="tel" name="telefone">
						<span class="focus-input100" data-placeholder="Telefone"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite um email válido">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="E-mail"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Digite uma senha">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Senha"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="As senhas não coincidem">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Confirme sua Senha"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Cadastrar
							</button>
						</div>
					</div>
				
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="res/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="res/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="res/vendor/bootstrap/js/popper.js"></script>
	<script src="res/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="res/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="res/vendor/daterangepicker/moment.min.js"></script>
	<script src="res/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="res/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="res/js/main.js"></script>

</body>
</html>