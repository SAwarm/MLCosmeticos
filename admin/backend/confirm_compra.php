<?php

    require_once('./connection.php');
    $id = $_POST['id'];

    $sql = "UPDATE pedido SET obs='Compra aprovada' where pedido.cod='$id'";
    
    if(mysqli_query($connection, $sql)){
        echo "true";
    }else{
        echo "false";
    }

