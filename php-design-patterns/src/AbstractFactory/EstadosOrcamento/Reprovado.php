<?php

namespace Alura\DesignPattern\AbstractFactory\EstadosOrcamento;

use Alura\DesignPattern\AbstractFactory\Orcamento;
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