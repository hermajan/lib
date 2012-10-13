<?php
/**
 * Handling with time in Czech.
 * 
 * @author DJohnny
 * @version 13.10.2012
 */
namespace lib\Time;

class Czech implements Language {
    public function timeWords() {
        echo "<body onload='casSlovne();'>";
          echo "<span id='cas'>00:00:00</span>";
        echo "</body>";
    }  
    public function dayOfWeek() {
        echo "<script type='text/javascript'>denVtydnu();</script>";
    }
 
    /**
     * Writes name day.   
     * @see http://en.wikipedia.org/wiki/Name_days_in_the_Czech_Republic
     * 
     * @param int $day Number of day (from 0 for Sunday to 6 for Saturday)
     * @param int $month Number of month (from 0 for January to 11 for December)
     */
    public function nameDay($day=0,$month=0) {
        echo "<script type='text/javascript'>jmeniny($day,$month);</script>";
    }
}
?>
