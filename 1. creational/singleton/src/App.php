<?php declare(strict_types=1);

class App
{
  private static $instance;

  private $config = [];

  private function __construct(Array $config)
  {
    $this->config = $config;
  }

  private function __wakeup()
  {
    throw new \Exception("Cannot unserialize a singleton.");
  }

  private function __clone()
  {
    throw new \Exception("Cannot clone a singleton.");
  }

  public static function getInstance(Array $config): App
  {
    if (static::$instance === null)
    {
      static::$instance = new static($config);
    }

    return static::$instance;
  }

  public function doSomething()
  {
    echo 'Do something...';
  }
}