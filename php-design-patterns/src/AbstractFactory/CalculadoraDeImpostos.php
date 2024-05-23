<?php

namespace Alura\DesignPattern\AbstractFactory;

use Alura\DesignPattern\AbstractFactory\Impostos\Imposto;

class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, Imposto $imposto): float
  {
    return $imposto->calculaImposto($orcamento);
    // switch ($nomeImposto) {
    //   case 'ICMS':
    //     return $orcamento->valor * 0.1;
    //   case 'ISS':
    //     return $orcamento->valor * 0.06;
    //   default:
    //     return 0;
    // }
  }
}
