<?php

namespace Alura\DesignPattern\Flyweight\Pedido;

use Alura\DesignPattern\Flyweight\Orcamento;

class Pedido
{
  public TemplatePedido $template;
  public Orcamento $orcamento;
}