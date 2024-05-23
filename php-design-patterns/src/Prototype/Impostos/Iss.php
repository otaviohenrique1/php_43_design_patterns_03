<?php

namespace Alura\DesignPattern\Prototype\Impostos;

use Alura\DesignPattern\Prototype\Orcamento;

class Iss extends Imposto
{
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor() * 0.06;
  }
}
