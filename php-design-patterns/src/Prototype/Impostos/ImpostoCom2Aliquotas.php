<?php

namespace Alura\DesignPattern\Prototype\Impostos;

use Alura\DesignPattern\Prototype\Orcamento;

/* Template Method */
abstract class ImpostoCom2Aliquotas extends Imposto
{
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    if ($this->deveAplicarTaxaMaxima($orcamento)) {
      return $this->calculaTaxaMaxima($orcamento);
    }
    return $this->calculaTaxaMinima($orcamento);
  }

  abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;

  abstract protected function calculaTaxaMaxima(Orcamento $orcamento): float;

  abstract protected function calculaTaxaMinima(Orcamento $orcamento): float;
}
