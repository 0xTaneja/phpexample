<?php

$conn = mysqli_connect("localhost","root","","grocery_store");
if($conn->connect_error)
{
    die('Connection is not established'.$conn->connect_error);
}

if(isset($_POST['additem']))
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $sqlquery="INSERT INTO ITEMS(name,price) VALUES('$name','$price')";
    if(mysqli_query($conn,$sqlquery))
    {
        echo "Item added successfully! <a href='store_item.php'>Go to Store</a>";
    }
    else
    {
       echo "Something went wrong ! Please Resubmit ! <a href='add_item.php'></a>";
    }

}


?>




<html>
<head>
    <title> Grocery Store </title>
</head>
<body>
   Grocery Store
   <form method = "POST">
   Name <input type ="text" name="name" placeholder = "Enter Item Name"/>
   Price <input type = "number" name = "price" placeholder = "Enter Price " />
   <input type = "submit" name = "additem" value = "additem"/> 
   </form> 
</body>
</html>