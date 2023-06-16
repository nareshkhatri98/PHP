<?php
class student{
  public $name;
  protected $rollno;
  private $phone;

  function test()
  {
    echo "Name: " .$this->name;
    echo "RllNo: " .$this->rollno;
    echo "phone: " .$this->phone;
  } 
}
$obj = new student;
$obj->name ="Ram";


$obj->test();
 ?>