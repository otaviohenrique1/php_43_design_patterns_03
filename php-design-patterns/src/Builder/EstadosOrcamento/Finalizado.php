<?php

namespace Alura\DesignPattern\Builder\EstadosOrcamento;

use Alura\DesignPattern\Builder\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}