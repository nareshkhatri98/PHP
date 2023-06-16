<?php
abstract class A{
  abstract function any();
    
  

}
 class B extends A{
  function any()
  {
    echo "this method is required.";
  }
 }
 $obj = new B;
 $obj->any();


  // the child class have any abstract class having abstract method can have argument or parameters in comparsion to parent abstract functiion or method..
 ?>
