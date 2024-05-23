<?php

namespace Alura\DesignPattern\Builder\Impostos;

use Alura\DesignPattern\Builder\Orcamento;

class Iss extends Imposto
{
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor() * 0.06;
  }
}
