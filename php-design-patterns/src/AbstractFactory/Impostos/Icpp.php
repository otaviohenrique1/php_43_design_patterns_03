<?php

namespace Alura\DesignPattern\AbstractFactory\Impostos;

use Alura\DesignPattern\AbstractFactory\Orcamento;

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
