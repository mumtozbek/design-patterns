<?php
/**
 * Created by PhpStorm
 * Author: Mumtoz Kodirov
 * Date: 10.12.2020
 * Time: 15:57
 */

namespace App;

use App\Contracts\redisInterface;

class Redis implements RedisInterface
{
  public function prepare()
  {
    echo 'starting the Redis cache' . PHP_EOL;
  }
}