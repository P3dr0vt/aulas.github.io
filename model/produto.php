<?php

class Produto
{
    private $id_produto;
    private $descricao;
    private $preco;

    public function __construct($id, $descricao, $preco)
    {
        $this->id_produto = $id;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function getId(){ return $this->id_produto; }
    public function getDescricao(){ return $this->descricao; }
    public function getPreco(){ return $this->preco; }
}

?>

