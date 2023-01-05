<?php 
	require_once '../../classes/Connection.php';
	$connection = new Connection();
	$connection = $connection->connection();
	$category_id = $_GET['category_id'];
	$sql = 'SELECT category_id, category_name FROM categories_table ORDER BY category_name';
	$result = mysqli_query($connection, $sql);
 ?>
<label for="select_category_id">Selecciona una categoría</label>
<select id="select_category_id" name="select_category_id" class="form-control form-control-sm">
    <?php 
 		while($show_data = mysqli_fetch_row($result)): 
 			if ($show_data[0] == $category_id) {
 	?>
    <option selected="" value="<?php echo $show_data[0] ?>"><?php echo $show_data[1]; ?></option>
    <?php  
 			} else {
 	?>
    <option value="<?php echo $show_data[0] ?>"><?php echo $show_data[1]; ?></option>
    <?php  
 			}
 	?>
    <?php endwhile; ?>
</select>