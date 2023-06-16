<body>
  <form action="" method="POST">
    <label>Enter your option</label>
    <input type="number" name="day"><br>
    <button type="submit">Submit</button>
  </form>
</body>
<?php

function dayOfWeek($day){
  switch($day){
    case 1:
        return "Sunday";
    case 2:
      return "Monday";
    case 3:
      return "Tuesday";
    case 4:
      return "Wednesday";
    case 5:
      return "Thursday";
    case 6:
      return "Friday";
    case 7:
      return "Saturday";
    default:
      return "Invalid option";
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $inputDay = $_POST["day"];
  $result = dayOfWeek($inputDay);
  echo $result;
}
?>
