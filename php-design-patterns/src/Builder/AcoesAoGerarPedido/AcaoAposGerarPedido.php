<?php

namespace Alura\DesignPattern\Builder;

use Alura\DesignPattern\Builder\Pedido\Pedido;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
