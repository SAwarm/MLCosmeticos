<?php

    session_start();
    require_once('./connection.php');
    $id_cliente = $_SESSION['id_cliente'];
    $id_produto = $_POST['id_produto'];

    if($_POST['update'] == "true"){
        $sqlUpdate = "UPDATE carrinho SET quantidade = quantidade + 1 WHERE cod_produto='$id_produto' and cod_cliente = $id_cliente"; 
        if (mysqli_query($connection, $sqlUpdate)){
            return "true";
        }else{
            return "false";
        }
    }else if ($_POST['update'] == "false"){
        $data = date('Y-m-d');
        $time =  date('h:i:s');
    
        $sqlInsert = "INSERT INTO carrinho (cod_produto, cod_cliente, data, hora, quantidade) VALUES
        ('$id_produto', '$id_cliente', '$data', '$time', 1)";
    
        if (mysqli_query($connection, $sqlInsert)){
            return "true";
        }else{
            return "false";
        }
    } 