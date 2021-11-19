<?php
    require_once('./connection.php');
    $id = $_POST['id'];
    if($_POST['action'] == "+"){
        $sql = "UPDATE carrinho SET quantidade = quantidade + 1 where cod = '$id'";
        mysqli_query($connection, $sql);
    }else if($_POST['action'] == "-"){
        
        $sql = "UPDATE carrinho SET quantidade = quantidade - 1 where cod = '$id'";
        mysqli_query($connection, $sql);

        $sqlSelect = "SELECT quantidade from carrinho where cod = '$id'";
        $result = mysqli_query($connection, $sqlSelect);

        $resultFetch = mysqli_fetch_array($result);
        foreach($result as $value){
            if ($value['quantidade'] == 0){
                $sqlDelete = "DELETE from carrinho where cod = '$id'";
                mysqli_query($connection, $sqlDelete);
            }
        }
    }