<?php

use Alura\DesignPattern\Builder\ItemOrcamento;
use Alura\DesignPattern\Builder\NotaFiscal\ConstrutorNotaFiscalProduto;

require_once 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalProduto();

$item1 = new ItemOrcamento();
$item1->valor = 500;

$item2 = new ItemOrcamento();
$item2->valor = 1500;

$item3 = new ItemOrcamento();
$item3->valor = 1000;

$notaFiscal = $builder->paraEmpresa('1234654', 'Vinicius Dias Tecnologia')
  ->comItem($item1)
  ->comItem($item2)
  ->comItem($item3)
  ->comObservacoes('Esta nota fiscal foi construída com um construtor')
  ->constroi();

echo $notaFiscal->valor();
