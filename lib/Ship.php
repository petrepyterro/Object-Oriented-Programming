<?php
class Ship{
  private $name;
  private $weaponPower = 0;
  private $jediFactor = 0;
  private $strength = 0;
  private $underRepair;
  
  public function __construct() {
    echo 'Automatically called!';
  }
  
  public function sayHello()
  {
    echo 'Hello!';
  }
  public function getName()
  {
    return $this->name;
  }
  
  public function getWeaponPower()
  {
    return $this->weaponPower;
  }
  
  public function getJediFactor()
  {
    return $this->jediFactor;
  }
  
  public function setName($name)
  {
    $this->name = $name;
  }
  
  public function setWeaponPower($weaponPower)
  {
    $this->weaponPower = $weaponPower;
  }
  
  public function setJediFactor($jediFactor)
  {
    $this->jediFactor = $jediFactor;
  }
  
  public function getNameAndSpecs($useShortFormat = false)
  {
    if ($useShortFormat) {
      return sprintf(
        '%s: %s/%s/%s',
        $this->name,
        $this->weaponPower,
        $this->jediFactor,
        $this->strength
      );
    } else {
      return sprintf(
        '%s: w:%s, j:%s, s:%s',
        $this->name,
        $this->weaponPower,
        $this->jediFactor,
        $this->strength
      );
    }
  }
  public function doesGivenShipHaveMoreStrength($givenShip)
  {
    return $givenShip->strength > $this->strength;
  }
  
  public function setStrength($strength){
    if(!is_numeric($strength)){
      throw new Exception('Invalid strength passed '.$strength);
    }
    
    $this->strength = $strength;
  }
  
  public function getStrength(){
    return $this->strength;
  }
}
