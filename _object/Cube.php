<?php
require_once 'Geometry.php';

class Cube implements Geometry3D {
  private $side;
    
  public function __construct($side) {
      $this->side=$side;
  }
   
  public function getSide() {
    return $this->side;
  }
   
  public function povrch() {
    return 6*$this->side*$this->side;
  }
  public function objem() {
    return $this->side*$this->side*$this->side;
  }
  
  
}
  
$c=new Cube(2);
echo "povrch ".$c->povrch();
echo "objem ".$c->objem();

?>
