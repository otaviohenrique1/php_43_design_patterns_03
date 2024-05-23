<?php

namespace Alura\DesignPattern\FactoryMethod\Log;

class StdoutLogManager extends LogManager
{
  function criaLogWritter(): LogWritter {
    return new StdoutLogWritter();
  }
}
