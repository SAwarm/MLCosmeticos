<?php
    require_once('./connection.php');

    $id_produto = $_POST['id_produto'];
    $id_dimensao = $_POST['id_dimensao'];

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $cor = $_POST['cor'];
    $marca = $_POST['marca'];
    $obs_produto = $_POST['observacao'];
    $tipo = $_POST['tipo'];
    $new_name = "";

    if(isset($_FILES['file-0']))
    {
        $ext = strtolower(substr($_FILES['file-0']['name'],-4)); 
        $new_name = date("Y.m.d-H.i.s") . $ext;
        $dir = './imagens/';
        move_uploaded_file($_FILES['file-0']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo

        $sql = "UPDATE produto SET imagem='$new_name' where cod='$id_produto'";

        mysqli_query($connection, $sqlUpdate);
    }

    $sqlUpdateProduto = "UPDATE produto SET nome='$nome', descricao='$descricao', preco='$preco', cor='$cor', marca='$marca',
    obs='$obs_produto', tipo='$tipo' WHERE cod='$id_produto'";

    if (mysqli_query($connection, $sqlUpdateProduto)) {
        $largura = $_POST['largura'];
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $profundidade = $_POST['profundidade'];
        $obs_dimensao = $_POST['observacao_dimensao'];

        $sqlUpdateDimensoes = "UPDATE dimensoes SET altura='$altura', largura='$largura', peso='$peso', profundidade='$profundidade',
        obs='$obs_dimensao' WHERE cod='$id_dimensao'";

        if (mysqli_query($connection, $sqlUpdateDimensoes)) {
            echo "Registro atualizado com sucesso!";
        } else {
            echo "Erro de atualização do registro: " . mysqli_error($connection);
        }
    } else {
        echo "Erro de atualização do registro: " . mysqli_error($connection);
    }

    