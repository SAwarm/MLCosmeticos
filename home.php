<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8"/>
	<title>MA & La Cosméticos</title>
	<link rel="stylesheet" href="res/css/style.css"/>
	<script src="/res/js/lib/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
	<script src="res/scripts.js"></script>
	<script>
		function main(){
			createCard("prod1.png", "alguma coisa cara");
			createCard("prod2.jpg", "alguma coisa pra olho");
			createCard("prod3.jpg", "um sabonete ai");
			createCard("prod4.jpg", "um gel topzeira");
		}
	</script>
	<style>
		body {
			font-family: "Lato", sans-serif;
		}

		.sidenav {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			right: 0;
			background-color: #111;
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
		}

		.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		.sidenav a:hover {
			color: #f1f1f1;
		}

		.sidenav .closebtn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}

		@media screen and (max-height: 450px) {
			.sidenav {padding-top: 15px;}
			.sidenav a {font-size: 18px;}
		}
	</style>
</head>
<body onload="main();">
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div>
			asdsad
		</div>
	</div>

	<header>
		<?php include '_cabecalho.php';?>
	</header>
	<main>
		<div id="carrossel">
			<img src="res/img/carrossel2.jpg"/>
		</div>
		<div id="produtos">
			<h1>produtos</h1>
			<div class="cards">
				
			</div>
		</div>
	</main>
	<footer>
		<?php include '_rodape.php';?>
	</footer>
	<div id="template_card" class="template">
		<div class="card-produto">
			<img class="foto" src=""/>
			<span class="desc"></span>
		</div>
	</div>	
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
	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
	$(".carrinho").click(function(){
	//	alert("as")
	})
</script>

