<?php

namespace Alura\DesignPattern\Singleton\Venda;

use Alura\DesignPattern\Singleton\Impostos\Icms;
use Alura\DesignPattern\Singleton\Impostos\Imposto;
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
