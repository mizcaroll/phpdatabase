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
 
<h2>Sign Up</h2>
<form action="includes/signup2.inc.php" method="POST">
<input type="text" name="first" placeholder="Firstname">
<br>
<input type="text" name="last" placeholder="Lastname">
<br>
<input type="text" name="email" placeholder="E-mail">
<br>
<input type="text" name="uid" placeholder="Username">
<br>
<input type="password" name="pwd" placeholder="Password">
<br>
<button type="submit" name="submit">Sign up</button>
</form>
<?php
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullUrl, "signup=empty") == true) {
  echo "<p class='error'>Please fill in all fields!</p>";
  exit();
}
elseif (strpos($fullUrl, "signup=char") == true) {
  echo "<p class='error'>Please use valid characters!</p>";
  exit();
}
elseif (strpos($fullUrl, "signup=email") == true) {
  echo "<p class='error'>Please use a valid e-mail address!</p>";
  exit();
}
elseif (strpos($fullUrl, "signup=success") == true) {
  echo "<p class='success'>You have been signed up successfully!</p>";
  exit();
}
?>
</body>
</html>

