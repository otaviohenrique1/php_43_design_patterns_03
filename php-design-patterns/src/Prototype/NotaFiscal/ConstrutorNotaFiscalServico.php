<?php

namespace Alura\DesignPattern\Prototype\NotaFiscal;

use Alura\DesignPattern\Prototype\NotaFiscal\NotaFiscal;

class ConstrutorNotaFiscalServico extends ConstrutorNotaFiscal
{
  public function constroi(): NotaFiscal
  {
    $valorNotaFiscal = $this->notaFiscal->valor();
    $this->notaFiscal->valorImpostos = $valorNotaFiscal * 0.06;
    return $this->notaFiscal;
  }
}
