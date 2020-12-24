<?php
/**
 * Created by PhpStorm
 * Author: Mumtoz Kodirov
 * Date: 15.12.2020
 * Time: 16:03
 */

class App
{
  private static $instance;

  protected Array $config;

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
    if (self::$instance === null)
      self::$instance = new self($config);

    return self::$instance;
  }

  public function doSomething()
  {
    echo 'Do something...';
  }
}