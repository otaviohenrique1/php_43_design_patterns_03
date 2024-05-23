<?php

namespace Alura\DesignPattern\FactoryMethod\Log;

interface LogWritter
{
  public function escreve(string $mensagemFormatada): void;
}
