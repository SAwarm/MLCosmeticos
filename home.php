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
</head>
<body onload="main();">
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
</body>
</html>

