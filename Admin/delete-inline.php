<?php

$trans_id = $_GET['id'];

include 'connect.php';

$sql = "DELETE FROM inventory WHERE item_id = {$trans_id}";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/Admin/index.php");

mysqli_close($conn);

?>
