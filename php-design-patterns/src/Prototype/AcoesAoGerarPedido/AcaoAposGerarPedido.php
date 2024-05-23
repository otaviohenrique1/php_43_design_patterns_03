<?php

namespace Alura\DesignPattern\Prototype;

use Alura\DesignPattern\Prototype\Pedido\Pedido;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
