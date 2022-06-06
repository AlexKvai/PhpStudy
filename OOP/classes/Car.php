<?php 
class Car 
{
  public $color;
  public $wheels = 4;
  public $speed = 180;
  public $brand;

  function getCarInfo() {
    return "<h3>О моём авто:</h3>
    Марка: {$this->brand} <br>
    Колёс: {$this->wheels} <br>
    Цвет: {$this->color} <br>
    Скорость: {$this->speed} <br>
    ";
  }

}
?>