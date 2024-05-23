<?php

namespace Alura\DesignPattern\Prototype\Venda;

use Alura\DesignPattern\Prototype\Impostos\Imposto;

interface VendaFactory
{
  public function criarVenda(): Venda;

  public function imposto(): Imposto;
}
