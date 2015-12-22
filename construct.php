<?php

/*
Author: Hannan Mondul
Date: 22 DESEMBER
2015
*/

  class Person{
  
    public $name;
    
    public $age;
    
    public $gender;
    
    public function __construct($name='Hannan',$age=28,$gender='Male')
    {
    $this->name = $name;
    
    $this->age = $age;
    
    $this->gender = $gender;
    }
    
    function show()
    {
    printf('<p>this person name is %s and age is %d and gender is %d</p>',
    $this->name,$this->age,$this->gender
    
    );
    }
  }
  
  $p = new Person();
  
  $p->show();
