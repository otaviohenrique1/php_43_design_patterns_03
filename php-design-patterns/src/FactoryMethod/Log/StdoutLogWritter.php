<?php

namespace Alura\DesignPattern\FactoryMethod\Log;

class StdoutLogWritter implements LogWritter
{
  public function escreve(string $mensagemFormatada): void {
    echo $mensagemFormatada;
  }
}
