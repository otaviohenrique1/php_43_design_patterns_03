<?php

namespace Alura\DesignPattern\Prototype\Impostos;

use Alura\DesignPattern\Prototype\Orcamento;

class Icms extends Imposto
{
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor() * 0.1;
  }
}
