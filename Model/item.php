<?php
class Item
{
    private int $id;
    private string $nome;
    private float $preco;

    public function __construct(int $id, string $nome, float $preco)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

}