<?php

namespace Alura\DesignPattern\AbstractFactory\Log;

class FileLogManager extends LogManager
{
  private string $caminhoArquivo;

  public function __construct(string $caminhoArquivo) {
    $this->caminhoArquivo = $caminhoArquivo;
  }

  /* FactoryMethod */
  function criaLogWritter(): LogWritter {
    return new FileLogWritter($this->caminhoArquivo);
  }
}
