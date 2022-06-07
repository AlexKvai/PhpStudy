<?php 
require_once 'IGadget.php';
class NotebookProduct extends Product implements IGadget
{
  
  public $cpu;

  public function __construct($name, $price, $cpu)
  {
    parent::__construct($name, $price);
    $this->cpu = $cpu;
    $this->setDiscount(10);
  }

  public function getCase()
  {
    
  }

  public function getProduct()
  {
    $out = parent ::getProduct();
    $out .= "Процессор: {$this->cpu}<br>";
    $out .= "Скидка: {$this->getDiscount()}%<br>";
    return $out;
  }

  public function getCpu()
  {
    return $this->cpu;
  }
  
  public function addProduct($name, $price)
  {

  }

}

?>