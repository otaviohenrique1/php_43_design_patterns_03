<?php

namespace Alura\DesignPattern\Singleton\NotaFiscal;

use Alura\DesignPattern\Singleton\NotaFiscal\NotaFiscal;

class ConstrutorNotaFiscalServico extends ConstrutorNotaFiscal
{
  public function constroi(): NotaFiscal
  {
    $valorNotaFiscal = $this->notaFiscal->valor();
    $this->notaFiscal->valorImpostos = $valorNotaFiscal * 0.06;
    return $this->notaFiscal;
  }
}
