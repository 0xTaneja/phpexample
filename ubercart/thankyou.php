<?php

$conn = mysqli_connect("localhost","root","","ubercart");
if($conn->connect_error)
{
    die('Connection not established'.$conn->connect_error);
}

if(isset($_POST['id']) && isset($_POST['quantity']))
{
    $itemid = $_POST['item_id'];
    $quantity = $_POST['quantity'];
    mysqli_query($conn,"INSERT INTO orders(item_id,quantity) VALUES('$item_id','$quantity')");
    echo "<h2>✅ Order Placed Successfully!</h2>";
    echo "<p><a href='store_item.php'>Go Back to Store</a></p>";
} 
else{
    echo "Invalid Order";
}