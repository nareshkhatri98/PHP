<?php
class test{
  private $name;
  private $roll;

  function __construct($name, $roll){
    $this->name= $name;
    $this->roll = $roll;
  }
   function show()
  {
    echo $this->name;
    echo $this->roll;
    
  }
} 
class child extends test{
  function display()
  {
    echo "Hello";

  }
}
$chld = new  child("naresh","12");
$chld->show();
echo "<br>";
$chld->display();

?>