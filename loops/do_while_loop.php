<?php
function largest($a, $b, $c){
  if($a>$b && $a>$c)
  {
    return $a;
  }
  else if($b>$a && $b>$c){
    return $b;
  }
  else{
    return $c;
  }
}
$result=largest(12,13,14);
echo" The largest number is". $result;
?>