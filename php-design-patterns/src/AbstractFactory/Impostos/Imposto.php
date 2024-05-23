<?php

namespace Alura\DesignPattern\AbstractFactory\Impostos;

use Alura\DesignPattern\AbstractFactory\Orcamento;

abstract class Imposto {
  public ?Imposto $outroImposto;

  public function __construct(Imposto $outroImposto = null) {
    $this->outroImposto = $outroImposto;
  }

  abstract protected function realizaCalculoEspecifico(Orcamento $orcamento): float;

  public function calculaImposto(Orcamento $orcamento)
  {
    return $this->realizaCalculoEspecifico($orcamento) + $this->realizaCalculoDeOutroImposto($orcamento);
  }

  private function realizaCalculoDeOutroImposto(Orcamento $orcamento)
  {
    return $this->outroImposto === null ? 0 : $this->outroImposto->calculaImposto($orcamento);
  }
}
