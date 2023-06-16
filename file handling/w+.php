<?php
$myfile = "./w+.txt";
$file = fopen($myfile, 'w+');
$content="Hello every one";

$data = fwrite($file, $content);
fclose($file);
   
  $file = fopen($myfile, 'r');
  $call = fread($file, filesize($myfile));
  echo $call;
?>