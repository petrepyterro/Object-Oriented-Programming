<?php

class Ship{
  public $name; 
  
  public function sayHello(){
    echo 'HELLO!';
  }
  
  public function getName() {
    return 'FAKE NAME';
  }
}

//but it doesn't do anything yet
$myShip=new Ship();
//$myShip->name = 'TIE Fighter';

echo 'Ship Name: ' . $myShip->getName();

echo 'Ship Name: '.$myShip->name;
echo '<hr>';
echo $myShip->sayHello();
