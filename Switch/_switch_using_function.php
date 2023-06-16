
<!DOCTYPE html>
<html>
<body>
  <form method="post" action="">
    <label>Enter your option: </label><br>
    <input type="number" id="day" name="day">
    <button type="submit">Submit</button>
  </form>
</body>
</html>

<?php
function printDayOfWeek($day) {
  switch($day){
    case 1:
      echo "Sunday";
      break;
    case 2:
      echo "Monday";
      break;
    case 3:
      echo "Tuesday";
      break;
    case 4:
      echo "Wednesday";
      break;
    case 5:
      echo "Thursday";
      break;
    case 6:
      echo"Friday";
      break;
    case 7:
      echo"Saturday";
      break;
    default:
      return "Invalid option";    
  }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){

  $inputDay = $_POST["day"];
  $result = printDayOfWeek($inputDay);
  echo  $result;
}
?>
