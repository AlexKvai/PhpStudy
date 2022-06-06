<?php 
  require_once 'classes/Car.php';
  $car1 = new Car('black', 4, 180, 'bmw');
  echo Car::getCount();
  echo $car1->getCarInfo();

  echo $car1->Test();
  echo $car1->getPrototypeInfo();
  echo Car::TEST_CAR;
  echo Car::class;
?>