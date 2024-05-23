<?php

namespace Alura\DesignPattern\AbstractFactory\Log;

abstract class LogManager
{
  public function log(string $severidade, string $mensagem): void
  {
    /** @var LogWritter $logWritter */
    $logWritter = $this->criaLogWritter();

    $dataHoje = date('d/m/Y');
    $mensagemFormatada = "[$dataHoje][$severidade]: $mensagem";
    $logWritter->escreve($mensagemFormatada);
  }

  abstract function criaLogWritter(): LogWritter;
}
