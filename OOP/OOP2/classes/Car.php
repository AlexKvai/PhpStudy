<?php 

class Car {
  public $color;
  public $wheels;
  public $speed;
  public $brand;

  const TEST_CAR = "Прототип"; //Тип public
  const TEST_CAR_SPEED = 250;  //Тип public
 
  public static $countCar = 0;

  public function __construct($color, $wheels, $speed, $brand)
  {
    $this->color = $color;
    $this->wheels = $wheels;
    $this->speed = $speed;
    $this->brand = $brand;
    self::$countCar++; //  Car::$countCar++
  }

  public static function getCount()
  {
    return self::$countCar;
  }

  public function Test()
  {
    echo 'Hello, World'; 
  }

  function getCarInfo() {
    return "<h3>О моём авто:</h3>
    Марка: {$this->brand} <br>
    Колёс: {$this->wheels} <br>
    Цвет: {$this->color} <br>
    Скорость: {$this->speed} <br>
    ";
  }

  public function getPrototypeInfo()
  {
    return "<h3>О тестовом авто:</h3>
    Имя:". self::TEST_CAR . "<br>
    Скорость: ". self::TEST_CAR_SPEED ."<br>
    ";
  }

}