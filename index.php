<?php
session_start();
include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="styles.css">
  <title>PHPdatabase</title>
</head>
<body>

<form action="deletefile.php" method="POST">
  <input type="text" name="filename" placeholder="Separate each name with a comma (,)">
<button type="submit" name="submit">Delete File</button>
</form>

</body>
</html>

