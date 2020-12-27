<?php declare(strict_types=1);

interface CacheInterface
{
  public function get($key);
}

class FileCache implements CacheInterface
{
  public function get($key)
  {
    // Some logic
  }
}

class RedisCache implements CacheInterface
{
  public function get($key)
  {
    // Some logic
  }
}

abstract class CacheFabric
{
  abstract public function getDriver(): CacheInterface;

  public function get($key)
  {
    $cache = $this->getDriver();

    return $cache->get($key);
  }
}

class FileCacheFabric extends CacheFabric
{
  public function getDriver(): CacheInterface
  {
    return new FileCache();
  }
}

class RedisCacheFabric extends CacheFabric
{
  public function getDriver(): CacheInterface
  {
    return new RedisCache();
  }
}
