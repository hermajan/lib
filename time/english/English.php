<?php
/**
 * Handling with time in English.
 * 
 * @author DJohnny
 * @version 13.10.2012
 */
namespace lib\Time;

class English implements Language {
    public function timeWords() {
       echo "<body onload='timeWords();'>";
         echo "<span id='time'>00:00:00</span>";
       echo "</body>";
    }
    public function dayOfWeek() {
      echo "<script type='text/javascript'>dayOfWeek();</script>";
    }
}
?>
