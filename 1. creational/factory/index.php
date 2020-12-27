<?php declare(strict_types=1);

class Food
{
  // Some logic
}

class FoodFactory
{
  public function makeFood(): Food
  {
    return new Food();
  }
}

$factory = new FoodFactory();
$food = $factory->makeFood();
