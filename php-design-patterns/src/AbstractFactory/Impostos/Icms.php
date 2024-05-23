<?php

namespace Alura\DesignPattern\AbstractFactory\Impostos;

use Alura\DesignPattern\AbstractFactory\Orcamento;

class Icms extends Imposto
{
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor() * 0.1;
  }
}
