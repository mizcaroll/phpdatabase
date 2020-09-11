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
$sql = "SELECT * FROM data";
$result = mysqli_query($conn, $sql);
$datas = array();
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $datas[] = $row;
  }
}
//to get all the data within a specific column
foreach ($datas as $data) {
echo $data['texts']. " ";
}
?>
</body>
</html>

