<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="style3.css">
  <title>Contact Form</title>
</head>
<body>
<?php
//This example is very unique and can be used to generate secure passwords

$conn = mysqli_connect("localhost", "root", "", "phpkeys");
function checkKeys($conn, $randStr) {
  $sql = "SELECT * FROM keystring";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
if ($row['keystringKey'] == $randStr) {
$keyExists = true;
break;
} else  {
  $keyExists = false;
}
  }
  return $keyExists;
}
function keyGen($conn) {
  $KeyLength = 8;
  $str = "123456789abcdefghijklmnopqrstuvwxyz()/$";
  $randStr = substr(str_shuffle($str), 0, $KeyLength);
  $checkKey = checkKeys($conn, $randStr);
  while ($checkKey == true) {
    $randStr = substr(str_shuffle($str), 0, $KeyLength);
    $checkKey = checkKeys($conn, $randStr);
  }
  return $randStr;
}
echo keyGen($conn);

?>
</body>
</html>

