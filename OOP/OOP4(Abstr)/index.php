<?php
error_reporting(-1);
use classes\BookProduct;
use classes\NotebookProduct;
use classes\interfaces\I3D;
use classes\Product;
use classes\interfaces\IGadget;
// require_once 'classes/Product.php';
// require_once 'classes/NotebookProduct.php';
// require_once 'classes/BookProduct.php';
// require_once 'classes/I3D.php';
// require_once 'classes/IGadget.php';

function autoloader1($class)
{
  $file = __DIR__ . '/' . str_replace("\\", "/", $class) . '.php';
  if(file_exists($file)){
    require_once $file;
  }
}

function autoloader2($class)
{
  $file = __DIR__ . '/' . str_replace("\\", "/", $class) . '.php';
  if(file_exists($file)){
    require_once $file;
  }
}

spl_autoload_register('autoloader1');
spl_autoload_register('autoloader2');

function debug($data) {
  echo '<pre>' . print_r($data, 1) .'</pre>';
}

function offerCase(IGadget $product) 
{
  echo "<p>Предлагаем чехол для гаджета {$product->getCase()}</p>";
}

$book = new BookProduct('Маша и медведь', 200, 50);
$notebook = new NotebookProduct('Dell', 12000, 'Intel');

offerCase($notebook);
// offerCase($book);
debug($book);


echo $book->getProduct();

?>