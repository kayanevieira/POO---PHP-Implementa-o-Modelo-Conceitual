<?php

class PagamentoComBoleto extends Pagamento
{
    private string $dataVencimento;
    private string $dataPagamento;


    public function __construct(int $id, string $status, string $dataVencimento, string $dataPagamento)
    {
        parent::__construct($id, $status);
        $this->dataVencimento = $dataVencimento;
        $this->dataPagamento = $dataPagamento;

    }
}
