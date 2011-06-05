<?php
 function mocnina($zaklad, $exponent) {
   if(is_numeric($zaklad) AND is_numeric($exponent)) {
    $exp=abs($exponent);
    $vysledek=1;
    for($i=1;$i<=$exp;$i++) {
        $vysledek*=$zaklad;
    }
    if($exponent<0) {
      return 1/$vysledek;
    }
    else { 
      return $vysledek;
    }
   }
   else {
     return "Musíte zadat celá čísla!";
   }
 }
 function faktorial($cislo) {
  if(is_numeric($cislo) AND $cislo>=0) {
    if($cislo==0) {
      return 1;
    }
    else {
      for($i=0;$i<=$cislo;$i++) {
        return $cislo*($cislo-$i);
      }
    }
  }
  else {
    return "Musíte zadat celé kladné číslo!";
  }
 }  
?>
