<?php 
require_once 'classes/MyFirstClass.php';
require_once 'classes/Car.php';

echo 111; 

$car = new Car();
$car->color = 'black';
$car->brand = 'volvo';

echo "<h3>О моём авто:</h3>
      Марка: {$car->brand} <br>
      Колёс: {$car->wheels} <br>
      
      ";

// $FirstObj = new MyFirstClass();
// var_dump($FirstObj);
?>