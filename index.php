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
//NB reg expressions are used e.g in php error handling to check if the user entered the right characters inside the input

$string = "My name is Caroline. My mum named me Caroline.";
echo preg_match("/^M.*.$/", $string);

?>
</body>
</html>

