<?php 

/*
How to use a constructor in OOP of PHP
*/

class Animal{
 public $name;
  
  
  public function __construct($name){
    $this->name = $name;
  }
}
