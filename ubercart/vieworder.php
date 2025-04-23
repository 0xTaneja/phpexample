<?php

$conn = mysqli_connect("localhost","root","","ubercart");
if($conn->connect_error)
{
    die('Connection is not established'.$conn->connect_error);
}

$result = mysqli_query($conn,"SELECT * from items");

?>

<html>
    <head>
        <title>View your Cart Orders</title>
    </head>
    <body>
      View your items
      <br>
      <?php while($row=mysqli_fetch_assoc($result)){ ?>
      <form method = "POST" action = "thankyou.php">
      <p>
      <strong> <?php echo $row['name']; ?></strong><br>
      Price: <?php echo $row['price']; ?></strong><br>
      quantity: 
      </p>
      <br>
      <input type = "number" name = "quantity" min = 1  value = 1 required/>
      <input type = "hidden" name = "item_id" value =<?php echo $row['id'];?> />
      <input type = "submit" value = "Order Now "/>
      </form>
      <?php }?>
    </body>
</html>