<?php 
require_once 'classes/MyFirstClass.php';
require_once 'classes/Car.php';


$car = new Car();
$car->color = 'black';
$car->brand = 'volvo';


echo $car->getCarInfo();

// $FirstObj = new MyFirstClass();
// var_dump($FirstObj);
?>