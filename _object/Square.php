<?php
require_once 'Geometry.php';

class Square implements Geometry2D {
   private $side;
   
   public function __construct($side) {
      $this->side=$side;
   }
   
  public function getSide() {
    return $this->side;
  }
   
  public function obvod() {
    return 4*$this->side;
  }
  public function obsah() {
    return $this->side*$this->side;
  }
  
  
}
  
$c=new Square(5);
echo "obvod ".$c->obvod();
echo "strana ".$c->getSide();

?>
