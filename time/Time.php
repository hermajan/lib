<?php
/**
 * Handling with time.
 * 
 * @author DJohnny
 * @version 19.12.2012
 */
namespace lib\Time;

class Time {
    //private $nowTime=(string)date("H:i:s");
    //private $nowDate=(string)date("d.m.Y");
    
    /**
     * Writes date by JavaScript function.
     * 
     * @return string Date in format <day>.<month>.<year>.
     */
    public function dateJS() {
        \lib\Loading::loadJS(LIB_DIR."/time/date.js");
        echo "<script type='text/javascript'>dateJS();</script>";
    } 
}
?>