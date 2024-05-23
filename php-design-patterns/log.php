<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\FactoryMethod\Log\FileLogManager;
use Alura\DesignPattern\FactoryMethod\Log\StdoutLogManager;

$logManeger = new StdoutLogManager();
$logManeger->log('info', 'Testando log manager');

$logManeger = new FileLogManager(__DIR__ . '/log');
$logManeger->log('info', 'Testando log manager');
