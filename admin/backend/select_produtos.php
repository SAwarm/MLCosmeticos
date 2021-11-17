<?php

    require_once('./connection.php');

    if(!empty($_POST['edit'])){
        $id = $_POST['id'];

        $querySelect = "SELECT * from produto inner join dimensoes on produto.cod = dimensoes.cod where produto.cod='$id'";

        $result = mysqli_query($connection, $querySelect);

        while($row = mysqli_fetch_array($result)) {
            $rows [] = $row;
        }

        if(!empty($rows)){
            echo json_encode($rows);
        }else{
            echo "null";
        }
    }else{
        $querySelect = "SELECT * from produto";

        $result = mysqli_query($connection, $querySelect);

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
    }