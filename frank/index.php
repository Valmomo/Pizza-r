<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 <title>Pizza Order</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:url(bgg.jpg); background-repeat: no-repeat; background-size: cover;">
   <div id="wrapper">
    <div id="nav">
      <ul>
        <li><a href="data.php">View Data</a></li>
      </ul>

    </div>
  <div id="inputs">
  <div>
<center><form name="input" action="action.php" method="POST" >
  <h1>Order</h1>

  First name: <input type="text" name="firstname" placeholder="Fistname"><br/>
  Last name: <input type="text" name="lastname" placeholder="Lastname"><br/>
  Address:<input type="text" name="address" placeholder="Address">
 <br/>
    <p>Pizza toppings (Check all that apply)</p>
    <input type='checkbox' name="toppings[]" value="Cheese">Cheese
    <input type='checkbox' name="toppings[]" value="Mushrooms">Mushrooms
    <input type='checkbox' name="toppings[]" value="Pepperoni">Pepperoni
    <p>Comments:</br></p>
    <textarea name="comments"></textarea>
    <p></p>
  <input type="submit" value="Submit" >
</form>
</div>
</div>
</body>
</html>
