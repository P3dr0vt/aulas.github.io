<?php

include "sessao.php";
include "model/database.php";
include "model/produtoDAO.php";

//dados do form
$descricao = $_REQUEST["descricao"];
$preco = $_REQUEST["preco"];

//cria bd
$database = new Database();

//cria produto com os dados do form
$produto = new Produto(null, $descricao, $preco);

//cria o acesso ao bd para produto
$produtoDAO = new ProdutoDAO($database);

//insere produto
if($produtoDAO->insert($produto))
{
    echo "Produto cadastrado com sucesso!";
}
else
{
    echo "'Não foi possível cadastrar";
}

?>