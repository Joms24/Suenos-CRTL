<?php
include 'header.php';
?>
<div id="main-content">
    <h2>INVENTORY</h2>
    <?php
      include 'connect.php';

      $sql = "SELECT * FROM inventory JOIN color WHERE inventory.color = color.color_id";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>item id</th>
        <th>item name</th>
        <th>price</th>
        <th>category</th>
        <th>color</th>
        <th>items sold</th>
        <th>available stocks</th>
        <th>action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['item_id']; ?></td>
                <td><?php echo $row['item_name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['color']; ?></td>
                <td><?php echo $row['items_sold']; ?></td>
                <td><?php echo $row['available_stocks']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['item_id']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['item_id']; ?>'>Delete</a>
                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>
</body>
</html>
