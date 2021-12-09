<?php
    require_once("connection.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cep = $_POST['cep'];
    $estado = $_POST['estado'];

    function cadastroEndereco($conn, $bairro, $cidade, $rua, $numero, $cep, $estado){
        $sql = "INSERT INTO endereco (bairro, cidade, rua, numero, cep, estado) 
        VALUES('$bairro', '$cidade', '$rua', '$numero', '$cep', '$estado')";

        mysqli_query($conn, $sql);
        return mysqli_insert_id($conn);
    }

    $id_endereco = cadastroEndereco($connection, $bairro, $cidade, $rua, $numero, $cep, $estado);

    $sqlCliente = "INSERT INTO cliente (nome, senha, telefone, email, endereco_cod) VALUES('$nome', '$senha', '$telefone', '$email', '$id_endereco')";

    if (mysqli_query($connection, $sqlCliente)){
        echo "true";
    }else{
        echo "false";
    }
