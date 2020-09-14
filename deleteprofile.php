<?php
session_start();
include_once 'includes/dbh.inc.php';
$sessionid = $_SESSION['id'];

$filename = "uploads/profile".$sessionid."*";
$fileinfo = glob($filename);
$fileext = explode(".", $fileinfo[0]);
$fileactualext = $fileext[1];

$file = "uploads/profile".$sessionid.".".$fileactualext;

if (!unlink($file)){
echo "File wasn't deleted!";
} else {
  echo "File deleted successfully!";
}

$sql = "UPDATE profileimg SET status=1 WHERE userid='$sessionid';";
mysqli_query($conn, $sql);

header("Location: index.php?deletesuccess");