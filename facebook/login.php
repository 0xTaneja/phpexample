<?php
session_start();
$conn = mysqli_connect('localhost','root','','facebook');
if(!$conn)
{
    die('Connection Failed'. mysqli_connect_error());

}

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $passwd = $_POST['password'];
    
    $sql = "Select * from users WHERE email = '$email' and passwrd = '$passwd' ";
    $result = mysqli_query($conn,$sql);


    if(mysqli_num_rows($result) == 1 ){
     $user = mysqli_fetch_assoc($result);
     $_SESSION['name'] = $user['name'];
     header("Location: home.php");
     exit;
    }
    else
    {
        echo "<p> Invalid Login <p>";
    }


}

?>

<html>
  <head>
   <title> Login Facebok Code </title>
  </head>
  <body>
   Facebook Login 
   <form method = "POST" >
    Email <input type = "email" name = "email" placeholder = "Enter your email id " />
    Password <input type = "password" name = "password" placeholder = "Enter your password " />
    <input type = "submit" name = "login" value = "login" />


   </form>
  </body> 





</html>