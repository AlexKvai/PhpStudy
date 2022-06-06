<?php 
require_once 'classes/MyFirstClass.php';
require_once 'classes/Car.php';


$car = new Car('black', 4, 180, 'bmw');



echo $car->getCarInfo();

// $FirstObj = new MyFirstClass();
// var_dump($FirstObj);
?>