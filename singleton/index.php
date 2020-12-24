<?php
// Load app class
require 'src/App.php';

// Initialize some config
$config = ['foo' => 'bar'];

// Get an instance of the App
$app = App::getInstance($config);

// Do something with App
$app->doSomething();
