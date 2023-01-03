<?php include 'header.php';

if(isset($_POST['deletebtn'])){

include "connect.php";
$trans_id = $_POST['item_id'];

$sql = "DELETE FROM inventory WHERE item_id = {$trans_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/Admin/index.php");

mysqli_close($conn);

}
?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Insert item Id</label>
            <input type="text" name="item_id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
