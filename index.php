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
// echo "test123";
// echo "<br>";
// echo password_hash("test123", PASSWORD_DEFAULT);

$input = "test13";
$hashedPwdInDb = password_hash($input, PASSWORD_DEFAULT);

echo password_verify($input, $hashedPwdInDb);

?>
</body>
</html>

