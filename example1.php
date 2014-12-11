<?php
include('db.init.php');

$username = mysql_real_escape_string($_GET['username']);

$sql = "SELECT * from user WHERE username='$username'";

echo "SQL STRING: " . $sql;

$result = mysql_query($sql);
while ($row = mysql_fetch_array($result) ) {
  echo "<br> result row:";
  print_r($row);
}

?>
