<?php

class Cidade
{
    private int $id;
    private string $nome;
    private $estado;

    public function __construct(int $id, string $nome, $estado)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->estado = $estado;
    }

}