<?php 
class BookProduct extends Product
{
  
  public $numPages;

  public function __construct($name, $price, $numPages)
  {
    parent::__construct($name, $price);
    $this->numPages = $numPages;
    $this->setDiscount(5);
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

}


?>