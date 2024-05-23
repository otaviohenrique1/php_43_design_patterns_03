<?php

namespace Alura\DesignPattern\AbstractFactory\Venda;

use Alura\DesignPattern\AbstractFactory\Impostos\Icms;
use Alura\DesignPattern\AbstractFactory\Impostos\Imposto;
use DateTimeImmutable;

/* AbstractFactory */
class VendaProdutoFactory implements VendaFactory
{
  private int $pesoProduto;

  public function __construct(int $pesoProduto) {
    $this->pesoProduto = $pesoProduto;
  }

  public function criarVenda(): Venda {
    return new VendaProduto(New DateTimeImmutable(), $this->pesoProduto);
  }

  public function imposto(): Imposto {
    return new Icms();
  }
}
