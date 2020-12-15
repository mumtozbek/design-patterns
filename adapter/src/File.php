<?php
/**
 * Created by PhpStorm
 * Author: Mumtoz Kodirov
 * Date: 10.12.2020
 * Time: 15:45
 */

namespace App;

use App\Contracts\FileInterface;

class File implements FileInterface
{
  public function boot() {
    echo 'starting the File cache' . PHP_EOL;
  }
}