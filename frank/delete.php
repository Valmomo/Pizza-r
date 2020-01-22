<?php
    	$id=$_GET['id'];
    	include('db.php');
    	mysqli_query($dbcon,"delete from pizzaorder where id='$id'");
    	header('location:data.php');
    ?>