<?php
error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';
require_once 'classes/I3D.php';
function debug($data) {
  echo '<pre>' . print_r($data, 1) .'</pre>';
}

$book = new BookProduct('Маша и медведь', 200, 50);
$notebook = new NotebookProduct('Dell', 12000, 'Intel');

debug($book);


echo $book->getProduct();

$book->addProduct('Test', 100, 10);
$book->test();

?>