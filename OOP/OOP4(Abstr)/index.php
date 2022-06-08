<?php
error_reporting(-1);
use app\{A,B, BookProduct, NotebookProduct};
use PHPMailer\PHPMailer\PHPMailer;
use wfm\interfaces\IGadget;

require_once __DIR__ . '/vendor/autoload.php';

// function autoloader1($class)
// {
//   $class = str_replace('\\', '/', $class);
//   $file = __DIR__ . '/' . $class. '.php';
//   if(file_exists($file)){
//     require_once $file;
//   }
// }

// spl_autoload_register('autoloader1');


function debug($data) {
  echo '<pre>' . print_r($data, 1) .'</pre>';
}

function offerCase(IGadget $product) 
{
  echo "<p>Предлагаем чехол для гаджета {$product->getCase()}</p>";
}

$book = new BookProduct('Маша и медведь', 200, 50);
$notebook = new NotebookProduct('Dell', 12000, 'Intel');

// debug($book);
// debug($notebook);
// echo $book->getName();


// $mail = new PHPMailer();
// debug($mail);

// $a = new A();
// $b = new B();

// $a->getTest();
// echo '<br>';
// $b->getTest();
// echo '<br>';
// $b->getTest2();
// echo '<br>';

// $book->doAction1()->doAction2();

//debug($book);
// $book->test = 'hello';
echo $book->discount ;
// echo $book->getProduct();
debug($book);
?>