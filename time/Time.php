<?php
/**
 * Handling with time.
 * 
 * @author DJohnny
 * @version 07.03.2013
 */
namespace lib\Time;

class Time {
    /**
     * Constructor for class Time.
     */
    public function __construct() { }
    
    
    /**
     * Returns date.
     * 
     * @return string Date in format <day>.<month>.<year>.
     */
    public function datePHP() { return date("d.m.Y"); } 
    
    /**
     * Returns time.
     * 
     * @return string Time in format <hour>:<minute>:<second>.
     */
    public function timePHP() { return date("H:i:s");}


    /**
     * Writes date by JavaScript function.
     * 
     * @return string Date in format <day>.<month>.<year>.
     */
    public function dateJS() {
        $loading=new \lib\Loading(); $loading->loadJS(LIB_DIR."/time/date.js");
        echo "<script type='text/javascript'>dateJS();</script>";
    } 
    
    /**
     * Writes real time by JavaScript function.
     * 
     * @return string Time in format <hour>:<minute>:<second>.
     */
    public function timeJS() {
        $loading=new \lib\Loading(); $loading->loadJS(LIB_DIR."/time/clock.js");
        echo "<span id='time'></span><script type='text/javascript'>time();</script>";
    } 
}
?>