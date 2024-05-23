<?php

namespace Alura\DesignPattern\Builder\NotaFiscal;

use Alura\DesignPattern\Builder\NotaFiscal\NotaFiscal;

class ConstrutorNotaFiscalProduto extends ConstrutorNotaFiscal
{
  public function constroi(): NotaFiscal
  {
    $valorNotaFiscal = $this->notaFiscal->valor();
    $this->notaFiscal->valorImpostos = $valorNotaFiscal * 0.02;
    return $this->notaFiscal;
  }
}
