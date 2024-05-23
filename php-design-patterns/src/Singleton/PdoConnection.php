<?php

namespace Alura\DesignPattern\Singleton;

use PDO;

/* Singleton */
class PdoConnection extends PDO
{
  private static ?self $instance = null;

  private function __construct(
    $dsn,
    $usename = null,
    $passwd = null,
    $options = null
  ) {
    parent::__construct($dsn, $usename, $passwd, $options);
  }

  public static function getInstance(
    $dsn,
    $usename = null,
    $passwd = null,
    $options = null
  ): self {
    if (is_null(self::$instance)) {
      self::$instance = new static($dsn, $usename, $passwd, $options);
    }
    return self::$instance;
  }
}
