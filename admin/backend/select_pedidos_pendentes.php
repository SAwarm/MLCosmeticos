<?php

    require_once('./connection.php');

    $sql = "SELECT * FROM pedido inner join carrinho on carrinho.cod_pedido = pedido.cod
    inner join cliente on cliente.cod = carrinho.cod_cliente where pedido.obs IS NULL GROUP BY pedido.cod;";
    $result = mysqli_query($connection, $sql);

    while($row = mysqli_fetch_array($result)) {
        $rows [] = $row;
    }
    if($result != false){
        $result_sql = mysqli_fetch_array($result);
    }

    if(!empty($rows)){
        echo json_encode($rows);
    }else{
        echo "null";
    }