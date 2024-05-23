<?php

namespace Alura\DesignPattern\FactoryMethod\EstadosOrcamento;

use Alura\DesignPattern\FactoryMethod\Orcamento;

class Aprovado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    return $orcamento->valor() * 0.02;
  }

  public function finaliza(Orcamento $orcamento)
  {
    $orcamento->estadoAtual = new Finalizado();
  }
}