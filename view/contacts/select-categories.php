<?php 
	require_once '../../classes/Connection.php';
	$connection = new Connection();
	$connection = $connection->connection();
	$sql = 'SELECT category_id, category_name FROM categories_table ORDER BY category_name';
	$result = mysqli_query($connection, $sql);
 ?>
<label for="category_id_select">Selecciona una categoría</label>
<select class="form-control" id="category_id_select" name="category_id_select">
 	<option value="0">Selecciona una categoria</option>
 	<?php while($show_data = mysqli_fetch_row($result)): ?>
 		<option value="<?php echo $show_data[0];?>"><?php echo $show_data[1];?></option>
 	<?php endwhile;?>
</select>