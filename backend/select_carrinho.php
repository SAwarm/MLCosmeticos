<?php 

    require_once("./connection.php");
    session_start();

    $id_cliente = $_SESSION['id_cliente'];

    $sqlSelectCarrinho = "SELECT * from produto inner join carrinho on produto.cod = carrinho.cod_produto where carrinho.cod_cliente = '$id_cliente' and carrinho.cod_pedido IS NULL and quantidade >= 1";
   
    $result = mysqli_query($connection, $sqlSelectCarrinho);

    while($row = mysqli_fetch_array($result)) {
        $rows [] = $row;
    }

    if(!empty($rows)){
        echo json_encode($rows);
    }else{
        echo "null";
    }

