 <?php
class  A{
 
  protected function dis()
  {
    echo"hii";
  }
  private function aaa()
  {
    echo "This is private";
  }
  public function show()
  {
 
  return $this->aaa();
  }
}
$obj = new A;
 echo $obj->show();
?> 

