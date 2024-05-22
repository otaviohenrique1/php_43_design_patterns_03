<?php

namespace Alura\DesignPattern\FactoryMethod;

use Alura\DesignPattern\FactoryMethod\Pedido\Pedido;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
