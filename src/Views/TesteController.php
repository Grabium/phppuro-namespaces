<?php

namespace Gabriel\PHP_Puro_Namespaces\Views;

class TesteController
{
  public function __construct()
  {
    $this->testingClass();
  }
  public function testingClass()
  {
    print __CLASS__.PHP_EOL;
  }
}