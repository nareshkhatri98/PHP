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

 ?>