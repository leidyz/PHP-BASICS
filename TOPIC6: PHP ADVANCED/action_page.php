<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["fname"];
  $last = $_POST["lname"];
  $snack = $_POST["favsnack"];
  echo "Your name is $name ".$lname;
  echo "Your favorite snack is ".$snack;
}
?>