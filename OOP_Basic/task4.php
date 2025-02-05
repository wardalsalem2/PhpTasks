<?php 
abstract class Shape{

    abstract public function calculateArea();
 }
 
 class Circle extends Shape{
     function calculateArea(){
     return "Circle";
     }
 }
 
 class Rectangle extends Shape{
     function calculateArea(){
     return "Rectangle";
     }
 }
 
 $Circle=new Circle();
 echo $Circle->calculateArea();
 echo "<br>";
 $Rectangle=new Rectangle();
 echo $Rectangle->calculateArea();
?>