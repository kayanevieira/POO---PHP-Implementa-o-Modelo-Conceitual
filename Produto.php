<?php

class Produto
{
    private int $id;
    private string $nome;
    private float $preco;
    private float $desconto;
    private float $quantidade;
    private Categoria $categoria;


    public function __construct(int $id, string $nome, float $preco, Categoria $categoria, float $desconto, float $quantidade)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
        $this->desconto = $desconto;
        $this->quantidade = $quantidade;
    }


    public function getQuantidade(): float
    {
        return $this->quantidade;
    }

    public function getDesconto(): float
    {
        return $this->desconto;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }
}



