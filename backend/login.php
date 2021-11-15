<?php
    require_once("./connection.php");
    session_start();
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email == "admin" && $senha == "admin"){
        echo "admin";
    }else{
        $querySelect = "SELECT * from cliente where email='$email' and senha='$senha'";

        $result = mysqli_query($connection, $querySelect);
        $result = mysqli_fetch_array($result);

        if(!empty($result)){
            echo "Logado com sucesso!";
            $_SESSION['id_cliente'] = $result['cod'];
        }else{
            echo "Email ou Senha incorretos!";
        }
    }