 */
 <?php 
  $filename = "./test.txt";
  $file = fopen($filename, 'r');
  $data= fread($file, filesize($filename));
  
  echo $data;
  fclose($file);  
  ?>
  /*
 //
 write
 <?php 
  
  $myfile = "./write";
  $xyz= fopen($myfile,"w");
  
  $data = fwrite($file, "This is Naresh Khatri");

  $abc=fread($xyz, filesize($myfile));
  echo $abc;
   ?>