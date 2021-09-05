<?php

class Categoria
{
    private $id;
    private $nomeCategoria;
    private Produto $produto;

    public function __construct($id, $nomeCategoria)
    {
        $this->id = $id;
        $this->nomeCategoria = $nomeCategoria;
    }
}