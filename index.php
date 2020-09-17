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
function keyGen() {
$KeyLength = 8;
$str = "123456789abcdefghijklmnopqrstuvwxyz()/$";
$randStr = substr(str_shuffle($str), 0, $KeyLength);
return $randStr;
} 
echo keyGen();
?>
</body>
</html>

