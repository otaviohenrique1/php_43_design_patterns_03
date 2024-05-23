<?php

namespace Alura\DesignPattern\Singleton\Venda;

use Alura\DesignPattern\Singleton\Impostos\Imposto;
use Alura\DesignPattern\Singleton\Impostos\Iss;
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
