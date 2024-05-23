<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\Singleton\PdoConnection;

$pdo = PdoConnection::getInstance('sqlite::memory:');

// /** @var PDO $pdo2 */
$pdo2 = PdoConnection::getInstance('sqlite::memory:');

// $pdo2->bindValue();

var_dump($pdo, $pdo2);
