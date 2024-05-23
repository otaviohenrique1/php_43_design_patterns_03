<?php

namespace Alura\DesignPattern\FactoryMethod\Pedido;

use Alura\DesignPattern\FactoryMethod\Orcamento;

class Pedido
{
  public TemplatePedido $template;
  public Orcamento $orcamento;
}