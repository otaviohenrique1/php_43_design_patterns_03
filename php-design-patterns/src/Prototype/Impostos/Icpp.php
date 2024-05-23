<?php

namespace Alura\DesignPattern\Prototype\Impostos;

use Alura\DesignPattern\Prototype\Orcamento;

class Icpp extends ImpostoCom2Aliquotas
{
  protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
  {
    return $orcamento->valor() * 0.03;
  }

  protected function calculaTaxaMaxima(Orcamento $orcamento): float
  {
    return $orcamento->valor() * 0.02;
  }

  protected function calculaTaxaMinima(Orcamento $orcamento): float
  {
    return $orcamento->valor() * 0.025;
  }
}
