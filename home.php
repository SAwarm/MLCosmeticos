<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>MA & La Cosméticos</title>
	<link rel="stylesheet" href="res/css/style.css"/>
	<script src="/res/js/lib/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
	<script src="res/scripts.js"></script>
	<script>
		function main(){
			//createCard("prod1.png", "alguma coisa cara");
			//createCard("prod2.jpg", "alguma coisa pra olho");
			//createCard("prod3.jpg", "um sabonete ai");
			//createCard("prod4.jpg", "um gel topzeira");
		}
	</script>
	<style>
	a:hover {
		color: black;
	}
		body {
			font-family: "Lato", sans-serif;
		}

		.btn-adicionar-produto{
			background: hsl(25.7, 19.4%, 28.2%);
			color: white;
		}

		.btn{
			background: hsl(25.7, 19.4%, 28.2%);
			color: white;
		}

		.btn-adicionar-produto:hover{
			color: gray;
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
		<div class = "row align-items-center add-carrinho" style="margin: 10px; color: white" >
			
		</div>
		<div style="position: absolute; bottom: 10px; left: 30px; margin: 10px;" class="compra-pedido">

		</div>

			
		<br>
	</div>


		<div class="qrcode"></div>
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
			<?php 

			require_once("./backend/connection.php");
			$sql = "SELECT * from produto LIMIT 4";
			$result = mysqli_query($connection, $sql);

			while($row = mysqli_fetch_array($result)) {
				$rows [] = $row;
			}

			foreach($rows as $value){?>
				<div class="card" style="width: 18rem; margin-right: 50px; margin-bottom: 30px;">
					<img class="card-img-top"  width="300px;" height="450px;" src="admin/backend/imagens/<?php echo $value['imagem']; ?>" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title"><?php echo $value['nome']; ?></h5>
						<p class="card-text"><?php echo $value['descricao']; ?></p>
						<a href="#" data-id="<?php echo $value['cod']; ?>" class="btn btn-adicionar-produto">Adicionar produto ao carrinho</a>
					</div>
				</div><?php }?>
			</div>
		</div>
	</main>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Contato</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			...
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		</div>
		</div>
	</div>
	</div>
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
	$(document).ready(function() {
        loadCarrinho();
    });

	function loadCarrinho(){
		$.ajax({
            url: 'backend/select_carrinho.php',
            method: 'POST',
            type: 'POST',
            success: function(data){
				jq_json_obj = $.parseJSON(data);
					cols = "";
					colsPreco = "";
				if(jq_json_obj != null){
					cont = jq_json_obj.length;
					precoTotal = 0;
					var number1 = parseInt('0')
					//alert(jq_json_obj);
					for (x = 0; x < cont; x++){
						cols += '<span><img src="admin/backend/imagens/'+jq_json_obj[x]['imagem']+'" width="50px;" height="50px;" style="margin: 5px;"> '
						+''+jq_json_obj[x]['nome']+' <button class="btn btn-acao-carrinho" style="margin-left: 5px; margin-right: 5px;" data-id="'+jq_json_obj[x]['cod']+'">+</button>' +
						'<button class="btn btn-acao-carrinho" style="margin-right: 15px;" data-id="'+jq_json_obj[x]['cod']+'">-</button>'+
						'<input class="pesquisa value'+jq_json_obj[x]['cod_produto']+'" placeholder="" style="width: 40px; height: 40px;" disabled value='+jq_json_obj[x]['quantidade']+'></span>';
						$(".add-carrinho").html(cols);

						preco = parseInt(jq_json_obj[x]['preco'])
						number1 += preco * $('.value'+jq_json_obj[x]['cod_produto']).val();
					}
					colsPreco += '<span style="color: white">Total: <span style="color: white;">'+number1+'R$</span>'+
						'<button data-preco="'+number1+'.00" class="btn finalizarCompra" style="margin: 10px;">Finalizar Compra</button></span></div>';
					$('.compra-pedido').html(colsPreco)
				}else{
					$(".add-carrinho").html("<h4>Nenhum produto adicionado ao carrinho</h4>");
					$('.compra-pedido').html(colsPreco)
				}
            }
        });
	}

	function openNav() {
		document.getElementById("mySidenav").style.width = "25%";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
	$(".contato").click(function(){
		$('#exampleModal').modal('show');
	})
	$('.btn-adicionar-produto').click(function(){
		id = $(this).attr('data-id');
		update = false;
		if ($('.value'+id)[0]){
			if($('.value'+id).val() != ""){
				update = "true";
			}
		} else {
			update = "false";
		}
		$.ajax({
            url: 'backend/carrinho.php',
            data: {id_produto: id, update: update},
            method: 'POST',
            type: 'POST',
            success: function(data){
				loadCarrinho();
            }
        });
	})

	$(document).on('click','.btn-acao-carrinho', function(){
		id = $(this).attr('data-id')
		action = $(this).html()
		$.ajax({
            url: 'backend/update_carrinho.php',
            data: {id: id, action: action},
            method: 'POST',
            type: 'POST',
            success: function(data){
				loadCarrinho();
            }
        });
	})

	$(document).on('click', '.finalizarCompra', function(){
		preco = $(this).attr('data-preco');
		$.ajax({
            url: 'GerarPix/index.php',
			data: {preco: preco},
            method: 'GET',
            type: 'POST',
            success: function(data){
				//loadCarrinho();
				$('.qrcode').html(data)
            }
        });

		/*$.ajax({
			type: "GET",
			url: "GerarPix/index.php",
			dataType: "image/jpg",
			cache: true
		});*/
	})

</script>

