<?php
$conn = mysqli_connect("localhost","root","","grocery_store");
if($conn->connect_error)
{
   die('Connection not established'. $conn->connect_error);
}

$result = mysqli_query($conn,"SELECT * FROM items")
?>



<html>
<head>
    <title> View Grocery Store </title>
</head>
<body>
<h2>Grocery Store</h2>
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
 <form method="POST" action="thankyou.php">
 <p>
 <strong> <?php echo $row['name']; ?></strong><br>
 Price: <?php echo $row['price']; ?></strong><br>
 quantity: 
 <input type="number" name="quantity" min="1" value="1" required />
 <input type ="hidden" name="item_id" value="<?php echo $row['id']; ?>" />
 <input type="submit" value="Order Now" />

 <p>
 </form>

<?php } ?>

</body>
</html>