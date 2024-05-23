<?php

namespace Alura\DesignPattern\Prototype\Pedido;

use Alura\DesignPattern\Prototype\Orcamento;
use DateTimeImmutable;

class CriadorDePedido
{
  private array $templates = [];

  public function criaPedido(
    string $nomeCliente,
    string $dataFormatada,
    Orcamento $orcamento
  ): Pedido {
    $template = $this->gerarTemplatePedido($nomeCliente, $dataFormatada);
    var_dump($template);
    $pedido = new Pedido();
    $pedido->template = $template;
    $pedido->orcamento = $orcamento;
    return $pedido;
  }

  private function gerarTemplatePedido(
    string $nomeCliente,
    string $dataFormatada
  ): TemplatePedido {
    $hash = md5($nomeCliente . $dataFormatada);

    if (!array_key_exists($hash, $this->templates)) {
      $template = new TemplatePedido($nomeCliente, new DateTimeImmutable($dataFormatada));

      $this->templates[$hash] = $template;
    }
    return $this->templates[$hash];
  }
}
