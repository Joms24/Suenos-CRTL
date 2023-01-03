
<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Item Id</label>
            <input type="text" name="item_id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
      if(isset($_POST['showbtn'])){
        include 'connect.php';

        $trans_id = $_POST['item_id'];

        $sql = "SELECT * FROM inventory WHERE item_id = {$trans_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Item Name</label>
            <input type="hidden" name="item_id"  value="<?php echo $row['item_id']; ?>" />
            <input type="text" name="item_name" value="<?php echo $row['item_name']; ?>" />
        </div>
        <div class="form-group">
            <label>Category</label>
            <input type="text" name="category" value="<?php echo $row['category']; ?>" />
        </div>
        <div class="form-group">
        <label>Color</label>
        <?php
          $sql1 = "SELECT * FROM color";
          $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

          if(mysqli_num_rows($result1) > 0)  {
            echo '<select name="color">';
            while($row1 = mysqli_fetch_assoc($result1)){
              if($row['color'] == $row1['color_id']){
                $select = "selected";
              }else{
                $select = "";
              }
              echo  "<option {$select} value='{$row1['color_id']}'>{$row1['color']}</option>";
            }
        echo "</select>";
      }
          ?>
        </div>
       
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php
  }
}
}

    ?>
</div>
</div>
</body>
</html>
