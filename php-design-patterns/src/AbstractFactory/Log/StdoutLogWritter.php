<?php

namespace Alura\DesignPattern\AbstractFactory\Log;

class StdoutLogWritter implements LogWritter
{
  public function escreve(string $mensagemFormatada): void {
    echo $mensagemFormatada;
  }
}
