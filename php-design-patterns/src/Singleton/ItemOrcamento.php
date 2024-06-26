<?php

namespace Alura\DesignPattern\Singleton;

class ItemOrcamento implements Orcavel
{
  public float $valor;

  public function valor(): float
  {
    sleep(1);
    return $this->valor;
  }
}
