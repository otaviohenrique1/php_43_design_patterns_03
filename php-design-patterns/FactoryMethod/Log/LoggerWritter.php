<?php

namespace Alura\DesignPattern\FactoryMethod\Log;

interface LoggerWritter
{
  public function log(string $mensagemFormatada);
}
