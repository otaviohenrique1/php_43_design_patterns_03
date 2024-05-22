<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\Flyweight\Orcamento;
use Alura\DesignPattern\Flyweight\Pedido\CriadorDePedido;


/* Flyweight */

$pedidos = [];
$criadorPedido = new CriadorDePedido();

for ($i=0; $i < 10000; $i++) {
  $orcamento = new Orcamento();
  $pedido = $criadorPedido->criaPedido(
    'Vinicius Dias',
    date('Y-m-d'),
    $orcamento
  );
  $pedidos[] = $pedido;
}

echo memory_get_peak_usage();
