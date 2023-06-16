<?php
class Any{
  
  function __construct()
  {

     echo "Constructor running.....";

  }
}
 $obj = new Any;
 echo "<br>";
 ?> 

<?php 
class first{
  public $name ,$post;
  function __construct($name, $post)
  {
    $this->name= $name;
    $this ->post = $post;


  }
  function job()
  {
    return "Mr".$this->name. " has the " .$this->post ." in the company";
  }
}
$ab = new first('Ram thapa', 'Manager');
echo $ab->job();
echo "<br>";
$ab2 = new first('bisham thapa', 'mugi');
echo $ab2->job();
?>
 
 