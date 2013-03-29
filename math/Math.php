<?php
/**
 * Mathematical functions.
 * 
 * @author DJohnny
 * @version 29.03.2013
 */
namespace lib\Math;

class Math {
    /**
     * Constructor for class Math.
     */
    public function __construct() { }
    
    
    /**
     * Computes result of exponentiation.
     * 
     * @param int $base Base number.
     * @param int $exponent Exponent number.
     * @return string Result of exponentiation.
     * 
     */
    public function exponent($base,$exponent) {
      if(is_numeric($base) AND is_numeric($exponent)) {
        $exp=abs($exponent);
        $result=1;

        for($i=1;$i<=$exp;$i++) { $result*=$base; }

        if($exponent<0) { return 1/$result; }
        else { return $result; }
      }
      else { return "You must enter an integer number!"; }
    }
    
    /**
     * Computes factorial of number.
     * 
     * @param int $number Number to compute.
     * @return int|string Factorial of number.
     */
    public function factorial($number) {
      if(is_numeric($number) AND $number>=0) {
        if($number==0) { return 1; }
        else { return $number*\lib\Math\Math::factorial($number-1); }
      }
      else { return "You must enter a positive integer number!"; }
    }
    
    /**
     * Computes index n number from Fibonacci series.
     * 
     * @param int $n Index of number.
     * @return int Fibonacci number.
     */
    public function fibonacci($n) {
      $first=0;
      $second=1;
      $sum=0;
      $i=0;

      while($i<=$n) {
        $result=$first;
        $sum=$first+$second;
        $first=$second;
        $second=$sum;
        $i++;
      }
      
      return $result;
    }
    
    /**
     * Computes quadratic equation (ax^2+bx+c=0).
     * 
     * @param type $a A coefficient.
     * @param type $b B coefficient.
     * @param type $c C coefficient.
     * @return string Result of quadratic equation.
     */
    public function quadratic($a,$b,$c) {
      $discriminant=pow($b,2)-4*$a*$c;

      if($discriminant<0) {
        return "No result!";
      }

      if($discriminant==0) {
        $root1=-$b/2*$a;
        return $root1; 
      } 
      else {
        $root1=(-$b+sqrt($discriminant))/(2*$a);
        $root2=(-$b-sqrt($discriminant))/(2*$a);
        $result=array($root1,$root2);
        return $result;
      }
    }
}  
?>
