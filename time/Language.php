<?php
/**
 * Handling with time in different languages.
 * 
 * @author DJohnny
 * @version 19.12.2012
 */
namespace lib\Time;

interface Language {
    /**
     * Writes time in words.
     * 
     * @return string Time in words.
     */
    public function timeWords();
    
    /**
     * Writes day of week in word.
     * 
     * @return string Day of the week in word.
     */
    public function dayOfWeek();
}
?>
