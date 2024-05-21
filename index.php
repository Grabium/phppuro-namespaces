<?php

require_once 'autoload.php';

use Gabriel\PHP_Puro_Namespaces\Controllers\TesteController as T;
use Gabriel\PHP_Puro_Namespaces\Controllers\Teste2Controller as T2;
use Gabriel\PHP_Puro_Namespaces\Views\TesteView as V;

function imprimir()
{
  $t  = new  T();
  $v  = new  V();
  $t2 = new  T2();
  print 'Director_separator is: "'.DIRECTORY_SEPARATOR.'".'.PHP_EOL;
  print 'FIM. '.PHP_EOL;
  
}

imprimir();