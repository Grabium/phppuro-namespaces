<?php

require_once 'autoload.php';

use Gabriel\PHP_Puro_Namespaces\Controllers\TesteController as T;
use Gabriel\PHP_Puro_Namespaces\Views\TesteController as TV;//classe com mesmo nome que acima mas em pasta diferente.
use Gabriel\PHP_Puro_Namespaces\Controllers\TesteSecondController as TSecond;
use Gabriel\PHP_Puro_Namespaces\Views\TesteView as V;

function instaurar()
{
  $t  = new  T();
  $tv  = new  TV();
  $v  = new  V();
  $ts = new  TSecond();
  print 'Director_separator is: "'.DIRECTORY_SEPARATOR.'".'.PHP_EOL;
  print 'FIM. '.PHP_EOL;
  
}

instaurar();