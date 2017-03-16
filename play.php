<?php

class Ship{
  public $name; 
  
  public $weaponPower = 0;
  
  public $jediFactor= 0;
  
  public $strength = 0;
  
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
var_dump($myShip->weaponPower);
//echo $myShip->sayHello();
