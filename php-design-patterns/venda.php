<?php
use Alura\DesignPattern\AbstractFactory\Venda\VendaProdutoFactory;
use Alura\DesignPattern\AbstractFactory\Venda\VendaServicoFactory;

require_once 'vendor/autoload.php';

$fabricaProduto = new VendaServicoFactory('Vinicius Dias');
$vendaServico = $fabricaProduto->criarVenda();
$impostoServico = $fabricaProduto->imposto();

$fabricaProduto = new VendaProdutoFactory(1000);
$vendaProduto = $fabricaProduto->criarVenda();
$impostoProduto = $fabricaProduto->imposto();

var_dump($vendaServico, $impostoServico);
var_dump($vendaProduto, $impostoProduto);
