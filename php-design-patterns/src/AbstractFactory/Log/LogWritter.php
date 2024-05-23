<?php

namespace Alura\DesignPattern\AbstractFactory\Log;

interface LogWritter
{
  public function escreve(string $mensagemFormatada): void;
}
