<?php

namespace Alura\DesignPattern\Builder\Venda;

use DateTimeInterface;

class VendaProduto extends Venda
{
  private int $pesoProduto;

  public function __construct(DateTimeInterface $dataRealizacao, int $pesoProduto) {
    parent::__construct($dataRealizacao);
    $this->pesoProduto = $pesoProduto;
  }
}
