<?php
//error handling script + uploading to the database

//check if user has clicked the signup button
if (isset($_POST['submit'])) {

  //include the database connection
include_once 'dbh.inc.php';

//get the data from the signup form
$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email =mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

//check whether inputs are empty
if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
  header("Location: ../index.php?signup=empty");
  exit();
} else {

  //check if input characters are valid
if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
  header("Location: ../index.php?signup=char");
  exit(); 
} else {

//check if email is valid
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location: ../index.php?signup=email");
} else {

  //signup successfully
  $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
  echo "SQL error";
} else {
mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
mysqli_stmt_execute($stmt);
}
  header("Location: ../index.php?signup=success");
  exit();
}
}
}
}
else {
  header("Location: ../index.php?signup=error");
  exit();
}