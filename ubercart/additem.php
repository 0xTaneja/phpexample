<?php

$conn = mysqli_connect("localhost","root","","ubercart");
if($conn->connect_error)
{
    die('Connection not established'.$conn->connect_error);
}

if(isset($_POST['additem']))
{
    $name = $_POST['name'];
    $price = $_POST['price'];

    mysqli_query($conn,"INSERT INTO items(name,price) VALUES('$name','$price')");
    echo "Item Added Successfully";

}


?>



<html>
<head>
    <title>UberCart Program </title>
</head>
<body>
    UberCart Ecommerce
    <form method="POST">
        Name of your Item <input type = "text" name="name" placeholder ="Enter the Name of Item " />
        Price of your Item <input type = "number" name="price" placeholder = "Enter the Price of your Item "/>
        <input type = "submit" name="additem" value="submit"/>
    </form>
</body>
</html>