<?php
/**
 * Created by PhpStorm
 * Author: Mumtoz Kodirov
 * Date: 10.12.2020
 * Time: 16:15
 */

namespace App\Adapters;

use App\Redis;

class RedisAdapter implements \App\Contracts\FileInterface
{
  /**
   * @var redis
   */
  private redis $redis;

  public function __construct(Redis $redis)
  {
    $this->redis = $redis;
  }

  public function boot()
  {
    $this->redis->prepare();
  }
}