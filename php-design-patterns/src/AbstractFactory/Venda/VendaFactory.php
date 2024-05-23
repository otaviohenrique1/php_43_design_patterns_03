<?php

namespace Alura\DesignPattern\AbstractFactory\Venda;

use Alura\DesignPattern\AbstractFactory\Impostos\Imposto;

interface VendaFactory
{
  public function criarVenda(): Venda;

  public function imposto(): Imposto;
}
