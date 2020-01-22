<?php 
include('db.php');
$id=$_GET['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
//$toppings = $_POST['toppings'];
$comment = $_POST['comments'];

mysqli_query($dbcon,"update pizzaorder set
	firstname='$firstname',
	lastname='$lastname',
	address='$address',
		toppings='$toppings',
	comments='$comment'
	where id='$id'
	");
header('location:viewdata.php');
 ?>