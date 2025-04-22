
<?php
$conn = mysqli_connect("localhost","root","","facebook");

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $check = "SELECT * FROM users WHERE email = '$email' AND passwrd = '$password'";
    $result = mysqli_query($conn,$check);
    if(mysqli_num_rows($result)==1)
    {
        echo "<p> User already exists";
        echo "<p>Please Login <a href= 'login.php'>Here</a></p>";
        exit;
    }
    else{
    $sql = "INSERT INTO users (name, email, passwrd) VALUES ('$username', '$email', '$password')";
    mysqli_query($conn, $sql);


    echo "<p> User Registered Sucessfully <a href = 'login.php'> </a></p>";
    exit;
    }

}

?>

<html>
<head>
<title> Facebook Registration </title>


</head>
<body>
 Facebook Registeration
 <br>

 <form method = "POST" action= "">
   Name: <input type = "text" name = "username" placeholder = "Enter your username" required>
   Email: <input type = "email" name = "email" placeholder = "Enter your email" required>
   Password : <input type = "password" name = "password" placeholder = "Enter your password" required>
   <input type = "submit" name = "register" value = "register">

 </form>
</body>
</html>