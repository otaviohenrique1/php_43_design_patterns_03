<?php

namespace Alura\DesignPattern\AbstractFactory\EstadosOrcamento;

use Alura\DesignPattern\AbstractFactory\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}