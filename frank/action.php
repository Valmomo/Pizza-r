<?php 
 include ("db.php");


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$toppings = implode(',',$_POST['toppings']);
$comment = $_POST['comments'];

$sql ="INSERT INTO pizzaorder (firstname,lastname,address,toppings,comments) 
VALUES 
('$firstname','$lastname','$address','$toppings','$comment')
";

//if data has been inserted 
if ($dbcon->query($sql) == TRUE)
{
 echo"Registered Pls wait for Submission!!!";
  header("location:viewdata.php");
}
else
{
 echo "ERROR".$sql. "</br>" .$dbcon->error;
}
//closing connection
$dbcon->close();

 ?>