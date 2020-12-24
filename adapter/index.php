<?php
// Composer autoload
require 'vendor/autoload.php';

// Boot a file cache
(new App\Cache)->boot( new App\File );

// Boot a redis cache
(new App\Cache)->boot( new App\Adapters\RedisAdapter(new App\Redis) );