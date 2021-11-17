<?php 

    require_once('connection.php');

    $largura = $_POST['largura'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $profundidade = $_POST['profundidade'];
    $obs_dimensao = $_POST['observacao_dimensao'];

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $imagem = $_POST['imagem'];
    $cor = $_POST['cor'];
    $marca = $_POST['marca'];
    $obs_produto = $_POST['observacao'];
    $tipo = $_POST['tipo'];
    
    function insertDimensao($conn, $largura, $altura, $peso, $profundidade, $obs_dimensao){
        $sql = "INSERT INTO dimensoes (altura, largura, peso, profundidade, obs) VALUES ('$altura', '$largura', '$peso', '$profundidade', '$obs_dimensao')";

        mysqli_query($conn, $sql);
        return mysqli_insert_id($conn);
    }

    $id_dimensao = insertDimensao($connection, $largura, $altura, $peso, $profundidade, $obs);

    function insertProduto($conn, $nome, $descricao, $preco, $imagem, $cor, $marca, $dimensoes_id, $obs_produto, $tipo){
        $sql = "INSERT INTO produto (
            nome,
            descricao,
            preco,
            imagem,
            cor,
            marca,
            dimensoes_cod,
            obs,
            tipo
        ) VALUES (
            '$nome',
            '$descricao',
            '$preco',
            '$imagem',
            '$cor',
            '$marca',
            '$dimensoes_id',
            '$obs',
            '$tipo'
        )";

        mysqli_query($conn, $sql);
        return mysqli_insert_id($conn);
    }
   