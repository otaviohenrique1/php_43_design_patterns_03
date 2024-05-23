<?php

namespace Alura\DesignPattern\Builder\Venda;

use Alura\DesignPattern\Builder\Impostos\Imposto;
use Alura\DesignPattern\Builder\Impostos\Iss;
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
