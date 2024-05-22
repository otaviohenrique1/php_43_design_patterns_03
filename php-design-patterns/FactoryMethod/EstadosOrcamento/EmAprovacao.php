<?php

namespace Alura\DesignPattern\FactoryMethod\EstadosOrcamento;

use Alura\DesignPattern\FactoryMethod\Orcamento;

class EmAprovacao extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    return $orcamento->valor() * 0.05;
  }

  public function aprova(Orcamento $orcamento)
  {
    $orcamento->estadoAtual = new Aprovado();
  }

  public function reprova(Orcamento $orcamento)
  {
    $orcamento->estadoAtual = new Reprovado();
  }
}