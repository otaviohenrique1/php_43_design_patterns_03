<?php

namespace Alura\DesignPattern\FactoryMethod\Pedido;

use DateTimeInterface;

/* Flyweight */
class TemplatePedido
{
  private string $nomeCliente;
  private DateTimeInterface $dataFinalizacao;

  public function __construct(string $nomeCliente, DateTimeInterface $dataFinalizacao) {
    $this->nomeCliente = $nomeCliente;
    $this->dataFinalizacao = $dataFinalizacao;
  }

  public function nomeCliente(): string
  {
    return $this->nomeCliente;
  }

  public function dataFinalizacao(): DateTimeInterface
  {
    return $this->dataFinalizacao;
  }
}
