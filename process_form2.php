<?php

echo"calculating sum of the entered numbers<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve form data
$num1= $_POST["no1"];
$num2= $_POST["no2"];
$num3=$num1+$num2;
// Process the data (e.g., store in database, send email, etc.)
// For simplicity, just echoing here
echo "Entered Number1: $num1 <br>";
echo "Entered Number2:$num2<br>";
echo "The sum of $num1 and $num2 is:$num3";
}
?>
