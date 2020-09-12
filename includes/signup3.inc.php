<?php

  //include the database connection
include_once 'dbh.inc.php';

//get the data from the signup form
$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

  //signup successfully
  $sql = "INSERT INTO user (first, last, username, password) VALUES ('$first', '$last', '$uid', '$pwd')";
  mysqli_query($conn, $sql);

  $sql = "SELECT * FROM user WHERE username='$uid' AND first='$first'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
  $userid = $row['id'];
  $sql = "INSERT INTO profileimg (userid, status) VALUES ('$userid', 1)";
  mysqli_query($conn, $sql);

  header("Location: ../index.php");
}
} else {
  echo "You have an error!";
}

