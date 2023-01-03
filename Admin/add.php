
<?php include 'header.php'; ?>


<div id="main-content">

    <h2>Add New Item</h2>
    <form class="post-form" action="savedata.php" method="post">
       
	   <div class ="img_container"> </div>
	   
	   <div class="form-group">
            <label>Item name </label>
            <input type="text" name="item_name" required/>
        </div>
		
		<div class="form-group">
            <label> Price </label>
            <input type="text" name="price" required/>
        </div>
        
		<div class="form-group">
            <label>Category</label>
            <input type="text" name="category" required/>
        </div>
		
        <div class="form-group">
            <label>color</label>
            <select name="color" required>
                <option value="" selected disabled>------</option>
                <?php
                include 'connect.php';

                $sql = "SELECT * FROM color";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['color_id']; ?>"><?php echo $row['color']; ?> ></option>

              <?php } ?>
            </select>
        </div>
        
        <input class="submit" type="submit" value="Save"/>
    </form>
</div>
</div>
</body>
</html>
