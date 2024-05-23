<?php

namespace Alura\DesignPattern\FactoryMethod;

class LogDesconto
{
  public function informar(float $descontoCalculado): void
  {
    echo "Salvando log de desconto: $descontoCalculado";
  }
}
