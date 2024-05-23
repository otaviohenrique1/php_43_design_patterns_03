<?php

namespace Alura\DesignPattern\Prototype\EstadosOrcamento;

use Alura\DesignPattern\Prototype\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}