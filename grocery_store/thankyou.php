<?php
$conn = mysqli_connect("localhost","root","","grocery_store");
if($conn->connect_error)
{
    die('Connection is not established'.$conn->connect_error);
}

if(isset($_POST['item_id']) && isset($_POST['quantity']))
{
    $item_id = $_POST['item_id'];
    $quantity = $_POST['quantity'];

    mysqli_query($conn,"INSERT INTO orders(item_id,quantity) VALUES('$item_id','$quantity')");
    echo "<h2>✅ Order Placed Successfully!</h2>";
    echo "<p><a href='store_item.php'>Go Back to Store</a></p>";
}
else{
    echo "Invalid Order";
}