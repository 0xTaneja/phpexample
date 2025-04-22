

<?php
session_start();

if($_SERVER['REQUEST_METHOD'] =='POST'){
$code = $_POST['code'];

if($code == $_SESSION['code']){
    header("Location: success.php");
}
else{
    echo "<p> Invalid code. Please try again </p>";

}

}

?>

<!DOCTYPE html>
<html>
    <head>
    <title>Email Verfication Service </title>
    </head>
    <body> 
        <form method = "POST" action = "">
         <input type = "text" name = "code" placeholder = "Enter the code which was shared with you ">
         <input type = "submit" name = "submit" value = "Verfiy">

        </form>
    </body>
</html>