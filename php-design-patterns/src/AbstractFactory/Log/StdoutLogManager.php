<?php

namespace Alura\DesignPattern\AbstractFactory\Log;

class StdoutLogManager extends LogManager
{
  /* FactoryMethod */
  function criaLogWritter(): LogWritter {
    return new StdoutLogWritter();
  }
}
