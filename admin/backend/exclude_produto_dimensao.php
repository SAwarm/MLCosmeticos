<?php

    require_once("./connection.php");

    $id_produto = $_POST['id_produto'];
    $id_dimensao = $_POST['id_dimensao'];

    $sqlDeleteDimensao = "DELETE from dimensoes where cod='$id_dimensao'";

    if (mysqli_query($connection, $sqlDeleteDimensao)) {
        $sqlDeleteProduto = "DELETE from produto where cod ='$id_produto'";
        if (mysqli_query($connection, $sqlDeleteProduto)) {
            echo "Deletado com sucesso!";
        }
    } else {
        echo "Erro na deleção do registro: " . mysqli_error($connection);
    }