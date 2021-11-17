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
				<form class="login100-form validate-form" id="form-cadastro" action="/.">
					<span class="login100-form-title p-b-26">
						Cadastre-se
					</span>
					<span class="login100-form-title p-b-48">
						<img src="logo.png" alt="logo" width="100px" height="50%" class="foto">
					</span>

                    <div class="wrap-input100 validate-input">
						<span class="login100-form">
							Nome:
						</span>
						<input class="input100 nome" type="text" name="nome">
					</div>
                    <div class="wrap-input100 validate-input">
						<span class="login100-form">
							Email:
						</span>
						<input class="input100 email" type="tel" name="email">
					</div>

					<div class="wrap-input100 validate-input" >
						<span class="login100-form">
							Telefone:
						</span>
						<input class="input100 telefone" type="text" name="telefone">
					</div>

					<div class="wrap-input100 validate-input" >
						<span class="login100-form">
							Senha:
						</span>
						<input class="input100 senha" type="password" name="senha">
					</div>
                    <div class="wrap-input100 validate-input" >
						<span class="login100-form">
							Confirme a Sua Senha:
						</span>
						<input class="input100 confirm-senha" type="password" name="confirm-senha">
					</div>

					<div class="wrap-input100 validate-input" >
						<span class="login100-form">
							Estado:
						</span>
						<select class="input100 estado" type="text" name="estado"> 
							<option value="AC">AC</option>
							<option value="AL">AL</option>
							<option value="AM">AM</option>
							<option value="AP">AP</option>
							<option value="BA">BA</option>
							<option value="CE">CE</option>
							<option value="DF">DF</option>
							<option value="ES">ES</option>
							<option value="GO">GO</option>
							<option value="MA">MA</option>
							<option value="MG">MG</option>
							<option value="MS">MS</option>
							<option value="MT">MT</option>
							<option value="PA">PA</option>
							<option value="PB">PB</option>
							<option value="PE">PE</option>
							<option value="PI">PI</option>
							<option value="PR">PR</option>
							<option value="RJ">RJ</option>
							<option value="RN">RN</option>
							<option value="RO">RO</option>
							<option value="RR">RR</option>
							<option value="RS">RS</option>
							<option value="SC">SC</option>
							<option value="SE">SE</option>
							<option value="SP">SP</option>
							<option value="TO">TO</option>
						</select>
					</div>

					<div class="wrap-input100 validate-input" >
						<span class="login100-form">
							Cidade:
						</span>
						<input class="input100 cidade" type="text" name="cidade">
					</div>

					<div class="wrap-input100 validate-input" >
						<span class="login100-form">
							Bairro:
						</span>
						<input class="input100 bairro" type="text" name="bairro">
					</div>

					<div class="wrap-input100 validate-input" >
						<span class="login100-form">
							Rua:
						</span>
						<input class="input100 rua" type="text" name="rua">
					</div>
					<div class="wrap-input100 validate-input" >
						<span class="login100-form">
							Número:
						</span>
						<input class="input100 numero" type="text" name="numero">
					</div>
					<div class="wrap-input100 validate-input" >
						<span class="login100-form">
							CEP:
						</span>
						<input class="input100 cep" type="text" name="cep">
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn btn-cadastro" id="submit">
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

<script>

	$('#form-cadastro').submit(function (e) {
		nome = $('.nome').val();
		email = $('.email').val();
		telefone = $('.telefone').val();
		senha = $('.senha').val();
		confirm_senha = $('.confirm-senha').val();
		cidade = $('.cidade').val();
		bairro = $('.bairro').val();
		rua = $('.rua').val();
		numero = $('.numero').val();
		cep = $('.cep').val();
		
		if(nome == "" || email == "" || telefone == "" || senha == "" || confirm_senha == "" || cidade == "" ||
		bairro == "" || rua == "" || numero == "" || cep == ""){
			e.preventDefault();
			alert('Preencha todos os campos!')
		}else{
			
		}
	});

</script>