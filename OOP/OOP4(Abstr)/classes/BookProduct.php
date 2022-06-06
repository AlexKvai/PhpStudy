<?php 
require_once 'classes/I3D.php';
class BookProduct extends Product implements I3D
{
  public $numPages;
  const TEST = 20;

  public function __construct($name, $price, $numPages)
  {
    parent::__construct($name, $price);
    $this->numPages = $numPages;
    $this->setDiscount(5);
    var_dump(self::TEST); // Переопределять константу из интерфейса нельзя, из класса - можно
  }

  public function getProduct()
  {
    $out = parent ::getProduct();
    $out .= "Цена без скидки: {$this->price}<br>";
    $out .= "Количество страниц: {$this->numPages}<br>";
    $out .= "Скидка: {$this->getDiscount()}%<br>";
    return $out;
  }

  public function getNumPages()
  {
    return $this->numPages;
  }

  public function addProduct($name, $price, $numPages = 0)
  {
    var_dump($name);
    var_dump($price);
    var_dump($numPages);
  }

  public function test()
  {
    var_dump(self::TEST2);
  }

}


?>