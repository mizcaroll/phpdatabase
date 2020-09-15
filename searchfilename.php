<?php
$path = "uploads/*cat*";
$fileinfo = glob($path);
$fileactualname = $fileinfo[0];

if (!unlink($fileactualname)) {
echo "An error occurred while trying to delete the file!";
} else {
  //echo "File deleted successfully!";
  header("Location: index.php?deletesuccess");
}