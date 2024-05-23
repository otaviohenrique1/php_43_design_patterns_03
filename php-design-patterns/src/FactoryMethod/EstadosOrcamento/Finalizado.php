<?php

namespace Alura\DesignPattern\FactoryMethod\EstadosOrcamento;

use Alura\DesignPattern\FactoryMethod\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}