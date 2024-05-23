<?php

namespace Alura\DesignPattern\Builder\EstadosOrcamento;

use Alura\DesignPattern\Builder\Orcamento;
use DomainException;

class Reprovado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento reprovado não pode receber desconto');
  }

  public function finaliza(Orcamento $orcamento)
  {
    $orcamento->estadoAtual = new Finalizado();
  }
}