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
<?php

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
    $resultImg = mysqli_query($conn, $sqlImg);
    while ($rowImg = mysqli_fetch_assoc($resultImg)) {
echo "<div class='user-container'>";
if ($rowImg['status'] == 0) {
  echo "<img src='uploads/profile".$id.".jpg?'".mt_rand().">";
} else {
  echo "<img src='uploads/profiledefault.jpg'>";
}
echo "<p>".$row['username']."</p>";
echo "</div>";
    }
  }
} else {
  echo "There are no users signed-up yet. ";
}

if (isset($_SESSION['id'])) {
  if ($_SESSION['id'] == 1) {
    echo "You are logged in as user #1";
  }
  echo "<h2>Upload Profile Image</h2><br>
  <form action='upload.php' method='POST' enctype='multipart/form-data'>
  <input type='file' name='file'>
  <button type='submit' name='submit'>UPLOAD</button>
  </form>";
} else {
  echo "Login to Start!<hr><br>";
  echo "<form action='includes/signup3.inc.php' method='POST'> 
  <input type='text' name='first' placeholder='First name'> 
  <input type='text' name='last' placeholder='Last name'> 
  <input type='text' name='uid' placeholder='Username'> 
  <input type='password' name='pwd' placeholder='Password'> 
  <button type='submit' name='submitSignup'>Sign Up</button>
  </form> <br><hr>";
}
?>

<p>Login as user</p>
<form action="login.php" method="POST">
<button type="submit" name="submitLogin">Login</button>
</form>

<p>Logout as user</p>
<form action="logout.php" method="POST">
<button type="submit" name="submitLogout">Logout</button>
</form><br><hr>

</body>
</html>

