<?php 
class A{

  function test()
  {
    echo "this is parent";
  }
}
class B extends A{
  function test()
  {
    echo "this is child";
  }
}
$obj = new B;
$obj->test();
?>