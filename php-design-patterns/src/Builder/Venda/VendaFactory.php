<?php

namespace Alura\DesignPattern\Builder\Venda;

use Alura\DesignPattern\Builder\Impostos\Imposto;

interface VendaFactory
{
  public function criarVenda(): Venda;

  public function imposto(): Imposto;
}
