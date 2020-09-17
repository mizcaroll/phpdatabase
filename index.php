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
$string = "My name is Caroline. My mum named me Caroline.";
$string2 = preg_replace("/Caroline/", "Jackie", $string);
echo $string2;

?>
</body>
</html>

