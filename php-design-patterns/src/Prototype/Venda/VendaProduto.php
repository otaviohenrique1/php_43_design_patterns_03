<?php

namespace Alura\DesignPattern\Prototype\Venda;

use DateTimeInterface;

class VendaProduto extends Venda
{
  private int $pesoProduto;

  public function __construct(DateTimeInterface $dataRealizacao, int $pesoProduto) {
    parent::__construct($dataRealizacao);
    $this->pesoProduto = $pesoProduto;
  }
}
