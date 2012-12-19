<?php
/**
 * Handling with time in English.
 * 
 * @author DJohnny
 * @version 19.12.2012
 */
namespace lib\Time;

class English implements Language {
  public function timeWords() {
    \lib\Loading::loadJS(LIB_DIR."/time/english/clock.js");
    echo "<body onload='timeWords();'>";
     echo "<span id='time'>00:00:00</span>";
    echo "</body>";
  }
  public function dayOfWeek() {
    \lib\Loading::loadJS(LIB_DIR."/time/english/date.js");
    echo "<script type='text/javascript'>dayOfWeek();</script>";
  }
}
?>
