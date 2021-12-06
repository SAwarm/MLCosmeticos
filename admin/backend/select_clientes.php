<?php 

    require_once('./connection.php');

    $sql = "SELECT * FROM cliente inner join endereco on endereco.cod = cliente.endereco_cod";
    
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