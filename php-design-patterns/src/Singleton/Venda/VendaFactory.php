<?php

namespace Alura\DesignPattern\Singleton\Venda;

use Alura\DesignPattern\Singleton\Impostos\Imposto;

interface VendaFactory
{
  public function criarVenda(): Venda;

  public function imposto(): Imposto;
}
