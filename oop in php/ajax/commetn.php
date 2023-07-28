<?php
include "../../form validation/connect.php";

if(empty($POST['comment']) and(empty($post)))

{
  $comment = $POST['comment'];
  $insert = "INSERT INTO comment(comment) VALUES('$comment')";
}
 ?>