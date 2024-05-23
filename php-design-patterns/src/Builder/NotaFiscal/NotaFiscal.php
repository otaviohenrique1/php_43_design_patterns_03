<?php

namespace Alura\DesignPattern\Builder\NotaFiscal;

use Alura\DesignPattern\Builder\ItemOrcamento;
use DateTimeInterface;

class NotaFiscal
{
  public string $cnpjEmpresa;
  public string $razaoSocialEmpresa;
  public array $itens;
  public string $observacoes;
  public DateTimeInterface $dataEmissao;
  public float $valorImpostos;

  public function valor(): float
  {
    return array_reduce(
      $this->itens,
      function(float $valorAcumulado, ItemOrcamento $itemAtual) {
        return $valorAcumulado + $itemAtual->valor();
      },
      0
    );
  }
}
