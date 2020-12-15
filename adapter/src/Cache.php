<?php
/**
 * Created by PhpStorm
 * Author: Mumtoz Kodirov
 * Date: 10.12.2020
 * Time: 15:46
 */

namespace App;

use App\Contracts\FileInterface;

class Cache
{
  public function boot(FileInterface $cache) {
    $cache->boot();
  }
}