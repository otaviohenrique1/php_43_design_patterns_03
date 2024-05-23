<?php

namespace Alura\DesignPattern\Singleton\NotaFiscal;

use Alura\DesignPattern\Singleton\NotaFiscal\NotaFiscal;

class ConstrutorNotaFiscalProduto extends ConstrutorNotaFiscal
{
  public function constroi(): NotaFiscal
  {
    $valorNotaFiscal = $this->notaFiscal->valor();
    $this->notaFiscal->valorImpostos = $valorNotaFiscal * 0.02;
    return $this->notaFiscal;
  }
}
