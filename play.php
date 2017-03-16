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
  
  public function getNameAndSpecs() {
    if ($useShortFormat){
      return sprintf(
        '%s %s%s%s',
        $this->name,
        $this->weaponPower,
        $this->jediFactor,
        $this->strength      
      );
    } else {
      return sprintf(
        '%s (w:%s, j:%s, s:%s)',
        $this->name,
        $this->weaponPower,
        $this->jediFactor,
        $this->strength      
      );
    }
  }
}
//but it doesn't do anything yet
$myShip=new Ship();
$myShip->name = 'Jedi Starship';
$myShip->weaponPower = 10;
echo 'Ship Name: '.$myShip->name;
echo '<hr>';
echo $myShip->sayHello();
echo '<hr>';
echo $myShip->getName();
echo '<hr/>';
var_dump($myShip->weaponPower);
echo '<hr>';
echo 'Ship Description: '. $myShip->getNameAndSpecs(false);
echo '<hr>';
echo 'Ship Description: '. $myShip->getNameAndSpecs(true);

