<?php

    session_start();
    require_once('./connection.php');
    
    $id_cliente = $_SESSION['id_cliente'];
    $id_produto = $_POST['id_produto'];
    $data = date('Y-m-d');
    $time =  date('h:i:s');

    $sqlInsert = "INSERT INTO carrinho (cod_produto, cod_cliente, data, hora, quantidade) VALUES
    ('$id_produto', '$id_cliente', '$data', '$time', 1)";

    if (mysqli_query($connection, $sqlInsert)){
        return "true";
    }else{
        return "false";
    }