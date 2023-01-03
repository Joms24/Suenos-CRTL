<?php

 $item_name = $_POST['item_name'];
 $price = $_POST['price'];
 $category = $_POST['category'];
 $color = $_POST['color'];

$conn = mysqli_connect("localhost","root","","suenos") or die("Connection Failed");

$sql = "INSERT INTO inventory(item_name,price, category,color) VALUES ('{$item_name}', '{$price}','{$category}','{$color}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/Admin/index.php");

mysqli_close($conn);

?>
