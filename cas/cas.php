<?php
 function cas($typ=0) {
    echo "<body onload='cas($typ);'>";
      echo "<span id='cas'>00:00:00</span>";
    echo "</body>";
 }
 function svatek($den=0,$mesic=0) {
   echo "<script type='text/javascript'>svatek($den,$mesic);</script>";
 }
 function denVtydnu() {
   echo "<script type='text/javascript'>denVtydnu();</script>";
 }
 function datum() {
   echo "<script type='text/javascript'>datum();</script>";
 }
?>