<?php
/**
 * Handling with time.
 * 
 * @author DJohnny
 * @version 13.10.2012
 */
namespace lib\Time;

class Time {
    //private $nowTime=(string)date("H:i:s");
    //private $nowDate=(string)date("d.m.Y");
    
    /**
     * Writes date by Javascript function.
     * 
     * @return text Date in format <day>.<month>.<year>
     */
    public function dateJS() {
        echo "<script type='text/javascript'>dateJS();</script>";
    } 
}
?>