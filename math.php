<?php
 function mocnina($base, $exponent) {
    if(is_numeric($base) AND is_numeric($exponent)) {
      $exp=abs($exponent);
      $result=1;

      for($i=1;$i<=$exp;$i++) { $result*=$base; }

      if($exponent<0) { return 1/$result; }
      else { return $result; }
    }
    else { return "You must enter an integer number!"; }
 }
 function factorial($number) {
    if(is_numeric($number) AND $number>=0) {
      if($number==0) { return 1; }
      else { return $number*factorial($number-1); }
    }
    else { return "You must enter a positive integer number!"; }
 }  
?>
