<?php
error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';
require_once 'classes/I3D.php';
require_once 'classes/IGadget.php';
function debug($data) {
  echo '<pre>' . print_r($data, 1) .'</pre>';
}

function offerCase(IGadget $product) 
{
  echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new BookProduct('Маша и медведь', 200, 50);
$notebook = new NotebookProduct('Dell', 12000, 'Intel');

offerCase($notebook);
// offerCase($book);
debug($book);


echo $book->getProduct();

class A{};
class B extends A{};
class C{};

$a = new A();
$b = new B();
$c = new C();

// var_dump($a instanceof A);
// var_dump($notebook instanceof IGadget);
// var_dump($c instanceof C);
?>