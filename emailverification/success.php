<?php
session_start();

$email = $_SESSION['email'];



?>

<!DOCTYPE html>
<html>
    <head>
    <title> Email Successfully Verfied </title>
    </head>
    <body>
     <h1> Email Successfully Verified <h1>
     <p>Welcome, <?php echo htmlspecialchars($email); ?> 🎉</p>
    </body>
</html>