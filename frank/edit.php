<?php
	include('db.php');
	$id=$_GET['id'];
	$query=mysqli_query($dbcon,"select * from `pizzaorder` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div>
			<table>
			<form method="POST" action="update.php?id=<?php echo $id; ?>">
				<tr><td><h1>Edit Data</h1></td></tr>
				<tr>
					<td>
						<label>Firstname:</label>
						<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>Lastname:</label>
						<input type="text" name="lastname" value="<?php echo $row['lastname']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<label>Address:</label>
						<input type="text" name="address" value="<?php echo $row['address']; ?>">
					</td>
				</tr>
				
						<td>
							<label for="">Toppings</label>
							<input type='checkbox' name="toppings"checked value="<?php echo $row['toppings']; ?>"> Cheese
    <input type='checkbox' name="toppings" value="<?php echo $row['toppings']; ?>">Mushrooms
    <input type='checkbox' name="toppings" value="<?php echo $row['toppings']; ?>">Pepperoni
						</td>
					</tr>
					<tr>
						<td>
							<textarea name="comments" value="<?php echo $row['comments']; ?>"></textarea>
						</td>
					</tr>
				<tr>
					<td>
						<input type="submit" name="Submit" value="UPDATE">
					</td>
				</tr>
			</form>
			</table>
		</div>


	</div>
</body>
</html>