<?php
$item_id = $_POST['item_id'];
$item_name = $_POST['item_name'];
$category = $_POST['category'];
$color = $_POST['color'];

include 'connect.php';

$sql = "UPDATE inventory SET item_name = '{$item_name}', category = '{$category}',color = '{$color}' WHERE item_id = {$item_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/Admin/index.php");

mysqli_close($conn);

?>
