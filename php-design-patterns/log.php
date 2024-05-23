<?php

use Alura\DesignPattern\FactoryMethod\Log\StdoutLogManager;

require_once 'vendor/autoload.php';

$logManeger = new StdoutLogManager();
$logManeger->log('info', 'Testando log manager');
