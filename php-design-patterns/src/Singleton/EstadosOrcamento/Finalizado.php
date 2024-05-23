<?php

namespace Alura\DesignPattern\Singleton\EstadosOrcamento;

use Alura\DesignPattern\Singleton\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}