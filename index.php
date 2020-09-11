<?php
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
<?php

$data = array("first", "second");

array_push($data, "Jackie", 15, "Kefa");

print_r($data);

?>
</body>
</html>

