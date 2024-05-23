<?php

namespace Alura\DesignPattern\Singleton\Impostos;

use Alura\DesignPattern\Singleton\Orcamento;

class Icms extends Imposto
{
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor() * 0.1;
  }
}
