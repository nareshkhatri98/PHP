<?php
 $myfile = "./aaa.txt";
 $file = fopen($myfile, 'a');
 
 $result= fwrite($file, "My name is Naresh Khatri");

 fclose($file);

 $file = fopen($myfile,'r');
 $data= fread($file,filesize($myfile));
 echo $data;
 fclose($file);
?>