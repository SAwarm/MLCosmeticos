<?php 

    require_once('./connection.php');
    $id = $_POST['id'];
    $data = date('Y-m-d');
    $time =  date('h:i:s');

    $sql = "INSERT INTO pedido (cod_forma_pagto, data, hora) VALUES (1, '$data', '$time')";
    mysqli_query($connection, $sql);
    $return = mysqli_insert_id($connection);

    $sqlUp = "UPDATE carrinho SET cod_pedido='$return' where carrinho.cod_cliente = '$id' and cod_pedido is null";
    if(mysqli_query($connection, $sqlUp)){
        echo "true";
    }else{
        echo "false";
    }
