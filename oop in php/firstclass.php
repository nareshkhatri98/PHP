<?php
class Abc{
  function test()
  {
    return 'bisham';
  }
}
# createing a object
$obj = new Abc;
# calling the function.
echo $obj->test();

echo "<br>";
?>
<?php

class first {
  function add(){
    $num1 = 12;
    $num2 = 2;
    return $num1 + $num2;
  }
}
$A = new first;
echo  'the sum of two number is'.$A->add();

?>