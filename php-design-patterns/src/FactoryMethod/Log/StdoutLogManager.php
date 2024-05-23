<?php

namespace Alura\DesignPattern\FactoryMethod\Log;

class StdoutLogManager extends LogManager
{
  /* FactoryMethod */
  function criaLogWritter(): LogWritter {
    return new StdoutLogWritter();
  }
}
