<?php

class Ship{
  public $name; 
  
  public function sayHello(){
    echo 'HELLO!';
  }
}

//but it doesn't do anything yet
$myShip=new Ship();
$myShip->name = 'TIE Fighter';

echo 'Ship Name: '.$myShip->name;
echo '<hr>';
echo $myShip->sayHello();
