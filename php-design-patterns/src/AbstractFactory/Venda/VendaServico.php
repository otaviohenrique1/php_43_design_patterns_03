<?php

namespace Alura\DesignPattern\AbstractFactory\Venda;

use DateTimeInterface;

class VendaServico extends Venda
{
  private string $nomePrestador;

  public function __construct(DateTimeInterface $dataRealizacao, string $nomePrestador) {
    parent::__construct($dataRealizacao);
    $this->nomePrestador = $nomePrestador;
  }
}
