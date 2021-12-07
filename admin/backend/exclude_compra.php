<?php 
    require_once('./connection.php');
    $id = $_POST['id'];
    $sql = "DELETE from carrinho where carrinho.cod_pedido='$id'";

    if(mysqli_query($connection, $sql)){
        $sql = "DELETE from pedido where pedido.cod='$id'";
        if(mysqli_query($connection, $sql)){
            echo "true";
        }else{
            echo "false".mysqli_error($connection);
        }
    }else{
        echo "false".mysqli_error($connection);
    }