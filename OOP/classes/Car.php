<?php 
class Car 
{
  public $color;
  public $wheels;
  public $speed;
  public $brand;

  public function __construct($color, $wheels, $speed, $brand)
  {
    $this->color = $color;
    $this->wheels = $wheels;
    $this->speed = $speed;
    $this->brand = $brand;
  }
 
  function getCarInfo() {
    return "<h3>О моём авто:</h3>
    Марка: {$this->brand} <br>
    Колёс: {$this->wheels} <br>
    Цвет: {$this->color} <br>
    Скорость: {$this->speed} <br>
    ";
  }

  public function __destruct()
  {
    var_dump($this);
  }

}
?>