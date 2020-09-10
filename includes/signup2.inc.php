<?php
//error handling script + uploading to the database

if (isset($_POST['submit'])) {
include_once 'dbh.inc.php';

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email =mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
  header("Location: ../index.php?signup=empty");

} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location: ../index.php?signup=invalidemail");
} else {
  echo "You have signed up successfully.";
}
}
}
else {
  header("Location: ../index.php?signup=error");
}