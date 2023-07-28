<?php
  function test($file){
    if(!file_exists($file)){
        throw new Exception('this is an error msg');
    }
  }

  //call the test function
  // test('hello.txt');

  try{
    test('abc.txt');
  }
  catch(Exception $err){
    echo $err->getMessage();
  }

 ?>