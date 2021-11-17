<?php 

    require_once('connection.php');

    $largura = $_POST['largura'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $profundidade = $_POST['profundidade'];
    $obs_dimensao = $_POST['observacao_dimensao'];

    
    
    function insertDimensao($conn, $largura, $altura, $peso, $profundidade, $obs_dimensao){
        $sql = "INSERT INTO dimensoes (altura, largura, peso, profundidade, obs) VALUES ('$altura', '$largura', '$peso', '$profundidade', '$obs_dimensao')";

        mysqli_query($conn, $sql);
        return mysqli_insert_id($conn);
    }

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $cor = $_POST['cor'];
    $marca = $_POST['marca'];
    $obs_produto = $_POST['observacao'];
    $tipo = $_POST['tipo'];

    if(isset($_FILES['file-0']))
    {
        $ext = strtolower(substr($_FILES['file-0']['name'],-4)); 
        $new_name = date("Y.m.d-H.i.s") . $ext;
        $dir = './imagens/';
        move_uploaded_file($_FILES['file-0']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    }

    $id_dimensao = insertDimensao($connection, $largura, $altura, $peso, $profundidade, $obs_dimensao);
    echo insertProduto($connection, $nome, $descricao, $preco, $new_name, $cor, $marca, $id_dimensao, $obs_produto, $tipo);

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
            '$obs_produto',
            '$tipo'
        )";

        
        if(mysqli_query($conn, $sql)){
            return "true";
        }else{
            return "false";
        }
    }
   