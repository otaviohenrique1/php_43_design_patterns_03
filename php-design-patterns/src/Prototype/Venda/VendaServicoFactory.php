<?php

namespace Alura\DesignPattern\Prototype\Venda;

use Alura\DesignPattern\Prototype\Impostos\Imposto;
use Alura\DesignPattern\Prototype\Impostos\Iss;
use DateTimeImmutable;

/* AbstractFactory */
class VendaServicoFactory implements VendaFactory
{
  private string $nomePrestador;

  public function __construct(string $nomePrestador) {
    $this->nomePrestador = $nomePrestador;
  }

  public function criarVenda(): Venda {
    return new VendaServico(New DateTimeImmutable(), $this->nomePrestador);
  }

  public function imposto(): Imposto {
    return new Iss();
  }
}
