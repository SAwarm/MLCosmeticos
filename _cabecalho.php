<nav>
	<div id="anuncio"></div>
	<div id="head">
		<a href="./home.php"><img src="logo.png" alt="logo" class="rounded" height="80px" style="margin-left: 10px;" width="90%"></a>
		<input class="pesquisa" placeholder="Busco por"></input>
		<span class="links">
			<a href="#" class="contato">Contatos</a>
			<a href="#" class="carrinho" onclick="openNav()" >Carrinho</a>
		</span>
	</div>
	<div id="head-links">
		<ul>
			<li>
				<a href="#">rosto</a>
				<div class="menu">
				<?php 
					require_once('./backend/connection.php');
					$sql = "SELECT * FROM produto where tipo='rosto'";
					$result = mysqli_query($connection, $sql);
					while($row = mysqli_fetch_array($result)) {
						$rows [] = $row;
					}
					for ($i = 0; $i < count($rows); $i++){
						//print_r($rows[$i]['nome']);
					
					  ?>

					
					<a href="./produto.php?id=<?php echo  $rows[$i]['cod'] ?>"><?php echo  $rows[$i]['nome'] ?></a>
					<?php }?>
				</div>
			</li>
			<li>
				<a href="#">lábios</a>
				<div class="menu">
				<?php 
					require_once('./backend/connection.php');
					$sql = "SELECT * FROM produto where tipo='labios'";
					$result = mysqli_query($connection, $sql);
					$rows = [];
					while($row = mysqli_fetch_array($result)) {
						$rows [] = $row;
					}
					for ($i = 0; $i < count($rows); $i++){
						//print_r($rows[$i]['nome']);
					
					  ?>

					
					<a href="./produto.php?id=<?php echo $rows[$i]['cod'] ?>"><?php echo  $rows[$i]['nome'] ?></a>
					<?php }?>
				</div>
			</li>

			<li>
				<a href="#">olhos</a>
				<div class="menu">
				<?php 
					require_once('./backend/connection.php');
					$sql = "SELECT * FROM produto where tipo='olhos'";
					$result = mysqli_query($connection, $sql);
					$rows = [];
					while($row = mysqli_fetch_array($result)) {
						$rows [] = $row;
					}
					for ($i = 0; $i < count($rows); $i++){
						//print_r($rows[$i]['nome']);
					
					  ?>

					
					<a href="./produto.php?id=<?php echo $rows[$i]['cod'] ?>"><?php echo  $rows[$i]['nome'] ?></a>
					<?php }?>
				</div>
			</li>
			<li>
			<a href="#">sombrancelhas</a>
				<div class="menu">
				<?php 
					require_once('./backend/connection.php');
					$sql = "SELECT * FROM produto where tipo='sombrancelhas'";
					$result = mysqli_query($connection, $sql);
					$rows = [];
					while($row = mysqli_fetch_array($result)) {
						$rows [] = $row;
					}
					for ($i = 0; $i < count($rows); $i++){
						//print_r($rows[$i]['nome']);
					
					  ?>

					
					<a href="./produto.php?id=<?php echo $rows[$i]['cod'] ?>"><?php echo  $rows[$i]['nome'] ?></a>
					<?php }?>
				</div>
			</li>
			<li>
				<a href="#">linha facial</a>
				<div class="menu">
				<?php 
					require_once('./backend/connection.php');
					$sql = "SELECT * FROM produto where tipo='linha_facial'";
					$result = mysqli_query($connection, $sql);
					$rows = [];
					while($row = mysqli_fetch_array($result)) {
						$rows [] = $row;
					}
					for ($i = 0; $i < count($rows); $i++){
						//print_r($rows[$i]['nome']);
					
					  ?>

					
					<a href="./produto.php?id=<?php echo $rows[$i]['cod'] ?>"><?php echo  $rows[$i]['nome'] ?></a>
					<?php }?>
				</div>
			</li>
			<li>
				<a href="#">kits e acessórios</a>
				<div class="menu">
				<?php 
					require_once('./backend/connection.php');
					$sql = "SELECT * FROM produto where tipo='kits_acessorios'";
					$result = mysqli_query($connection, $sql);
					$rows = [];
					while($row = mysqli_fetch_array($result)) {
						$rows [] = $row;
					}
					for ($i = 0; $i < count($rows); $i++){
						//print_r($rows[$i]['nome']);
					
					  ?>

					
					<a href="./produto.php?id=<?php echo $rows[$i]['cod'] ?>"><?php echo  $rows[$i]['nome'] ?></a>
					<?php }?>
				</div>
			</li>
		</ul>
	</div>
</nav>