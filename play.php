<?php

class Ship{
  public $name; 
  
  public $weaponPower;
  
  public $jediFactor;
  
  public $strength;
  
  public function sayHello(){
    echo 'HELLO!';
  }
  
  public function getName() {
    return $this->name;
  }
}

//but it doesn't do anything yet
$myShip=new Ship();
$myShip->name = 'Jedi Starship';
//$myShip->name = 'TIE Fighter';

echo 'Ship Name: ' . $myShip->getName();

//echo 'Ship Name: '.$myShip->name;
echo '<hr>';
echo $myShip->sayHello();
