<?php

namespace Alura\DesignPattern\Singleton;

use Alura\DesignPattern\Singleton\Pedido\Pedido;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
