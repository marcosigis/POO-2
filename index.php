<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

// $bicycle = new Bicycle('blue', 1);
// echo $bicycle->forward();
// var_dump($bicycle);
// $car = new Car('green', 4, 'electric');
// echo $car->forward();
// var_dump($car);
// var_dump(Car::ALLOWED_ENERGIES);

$camion = new Truck ("Red", 4, "fuel", 20);
var_dump($camion);
echo $camion->forward();
echo $camion->brake();
echo $camion->load();
var_dump($camion);