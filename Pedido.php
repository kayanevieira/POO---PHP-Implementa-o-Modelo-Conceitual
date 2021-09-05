<?php

class Pedido
{
    /**
     * @var ItemPedido[]
     */
     private array $produtos = [];
     private $id;
     private $date;
     private Pagamento $pagamento;
     private Endereco $enderecoPedido;
     private ItemPedido $itemPedido;
     private Cliente $cliente;


    public function __construct($produtos, \DateTime $date, Pagamento $pagamento, Endereco $enderecoPedido, ItemPedido $itemPedido, Cliente $cliente)
    {
        $this->produtos = $produtos;
        $this->date = $date;
        $this->pagamento = $pagamento;
        $this->enderecoPedido = $enderecoPedido;
        $this->itemPedido = $itemPedido;
        $this->cliente = $cliente;
    }

    public function addProduto(Produto $produto, int $quantidade, float $desconto){
        $this->produtos[] = new ItemPedido($produto->getId(), $produto->getDesconto(), $produto->getPreco(), $produto->getQuantidade());

    }
}

