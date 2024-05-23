<?php

namespace Alura\DesignPattern\AbstractFactory\Pedido;

use Alura\DesignPattern\AbstractFactory\Orcamento;

class Pedido
{
  public TemplatePedido $template;
  public Orcamento $orcamento;
}