<?php

namespace Gabriel\PHP_Puro_Namespaces\Controllers;

use Gabriel\PHP_Puro_Namespaces\Views\TesteView as V;

class TesteSecondController 
{
  public function __construct()
  {
    $this->testingClass();
  }
  public function testingClass()
  {
    print __CLASS__.PHP_EOL;
    print 'Complicando mais: '.PHP_EOL;
    $v = new V();
    
  }
}