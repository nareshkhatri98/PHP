<?php
class student{
  public $name;
  protected $rollno;
  private $phone;
  function __construct($name, $rollno, $phone)
  {
    $this->name= $name;
    $this->rollno =$rollno;
    $this->phone = $phone;
  }
  function test()
  {
    return 'the color of car ' .$this->name. ' and model is ' .$this->rollno. ' price is ' .$this->phone;
  } 
  }
$obj = new student('ram', '12',1300);
echo $obj->test();
?>