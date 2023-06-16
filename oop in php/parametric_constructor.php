<?php
class car {
 public $color, $model, $price;
  function __construct($color, $model, $price)
  {
    $this->color = $color;
    $this->model = $model;
    $this->price = $price;
  }
   function show()
   {
    return 'the color of car ' .$this->color. ' and model is ' .$this->model. ' price is ' .$this->price;
   }
  }
$obj  =  new car('red', '6600', 12000); 
echo $obj->show();
 ?>

 