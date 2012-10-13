<?php
/**
 * Handling with time in different languages.
 * 
 * @author DJohnny
 * @version 13.10.2012
 */
namespace lib\Time;

interface Language {
    /**
     * Writes time in words.
     * 
     * @return text Time in words
     */
    public function timeWords();
    
    /**
     * Writes day of week in word.
     * 
     * @return text Day of week in word
     */
    public function dayOfWeek();
}
?>
