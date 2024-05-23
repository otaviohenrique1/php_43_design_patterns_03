<?php

namespace Alura\DesignPattern\AbstractFactory;

use Alura\DesignPattern\AbstractFactory\Pedido\Pedido;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
