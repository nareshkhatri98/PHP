<?php

// inheritance in php
class college
{
  private $phone;
  protected function phone()
  {
    return $this->phone = "90";
  }
}
class student extends college
{
  private $roll;
  private $phone;
  protected $name;
  function __construct($roll, $name, $phone)
  {
    $this->roll = $roll;
    $this->phone = $phone;
    $this->name = $name;
  }
  function info()
  {
    echo "Roll: " . $this->roll . " Name: " . $this->name . ' phone ' . $this->phone . '<br>';
    echo "private phone from the base class:" . $this->phone();
  }
}
$std = new student('2', 'ramesh rai', '98429900');
$std->info();

?>