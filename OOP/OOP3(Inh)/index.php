<?php
error_reporting(-1);
require_once 'classes/Product.php';
function debug($data) {
  echo '<pre>' . print_r($data, 1) .'</pre>';
}

$book = new Product('Маша и медведь', 200, null, 50);
$notebook = new Product('Dell', 12000, 'Intel');

debug($book);
debug($notebook);

echo $book->getProduct('book');
echo $notebook->getProduct('notebook');

?>