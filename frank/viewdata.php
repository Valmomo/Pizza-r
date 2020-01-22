
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:url(bgg.jpg); background-repeat: no-repeat; background-size: cover;">
  <center>
    <a href="index.php" style="padding-top:40px;">Go Back</a>
 <table border="1px solid black" style="margin-top:5em; background-color: #fff">
          <thead style="border:5px double; ">
  <th>FIRSTNAME</th>
  <th>LASTNAME</th>
  <th>ADDRESS</th>
  <th>TOPPINGS</th>
  <th>COMMENTS</th>
  
  <th></th>
</thead>
<tbody>
  <?php
    include('db.php');
    $query=mysqli_query($dbcon,"select * from `pizzaorder`");
    while($row=mysqli_fetch_array($query)){
      ?>
      <tr>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['toppings']; ?></td>
        <td><?php echo $row['comments']; ?></td>
        
        <td>
          <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
          <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
        </td>
      </tr>
      <?php
    }
  ?>
</tbody>
</table>
</center>
</body>
</html>