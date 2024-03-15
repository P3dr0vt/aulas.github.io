<?php

include "model/produto.php";

class ProdutoDAO
{
    private $connection = null;

    public function __construct(Database $db)
    {
        $this->connection = $db->getConnection();
    }

    public function insert(Produto $produto)
    {
        $id_produto = $produto->getId();
        $descricao = $produto->getDescricao();
        $preco = $produto->getPreco();

        //monta a consulta na conexão
        $consulta_produto = $this->connection->prepare("INSERT INTO produto(descricao, preco) VALUES (:descricao, :preco)");
        $consulta_produto->bindParam(":descricao", $descricao);
        $consulta_produto->bindParam(":preco", $preco);

        //exexuta a consulta SQL
        if($consulta_produto->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>