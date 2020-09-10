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

<?php
if (isset($_GET['first'])) {
  $first =  $_GET['first'];
  echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'"><br>';
}
else {
  echo '<input type="text" name="first" placeholder="Firstname"><br>';
}
if (isset($_GET['last'])) {
  $last =  $_GET['last'];
  echo '<input type="text" name="last" placeholder="Lastname" value="'.$last.'"><br>';
}
else {
  echo '<input type="text" name="last" placeholder="Lastname"><br>';
}
?>
<input type="text" name="email" placeholder="E-mail">
<br>
<?php
if (isset($_GET['uid'])) {
  $uid =  $_GET['uid'];
  echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'"><br>';
}
else {
  echo '<input type="text" name="uid" placeholder="Username"><br>';
}
?>
<input type="password" name="pwd" placeholder="Password">
<br>
<button type="submit" name="submit">Sign up</button>
</form>

<?php
if (!isset($_GET['signup'])) {
exit();
}
else {
$signupCheck = $_GET['signup'];

if ($signupCheck == "empty") {
  echo "<p class='error'>Please fill in all fields!</p>";
  exit();
}
elseif ($signupCheck == "char") {
  echo "<p class='error'>Please make sure to use valid characters for your name!</p>";
  exit();
}
elseif ($signupCheck == "email") {
  echo "<p class='error'>Please enter a valid e-mail address!</p>";
  exit();
}
elseif ($signupCheck == "success") {
  echo "<p class='success'>You have been signed up successfully!</p>";
  exit();
}
}
?>
</body>
</html>

