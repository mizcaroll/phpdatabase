<?php
$path = "uploads/largecat.jpg";
if (!unlink($path)) {
echo "An error occurred while trying to delete the file!";
} else {
  //echo "File deleted successfully!";
  header("Location: index.php?deletesuccess");
}


