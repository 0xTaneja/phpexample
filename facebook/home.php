<?php
   session_start();
   if(!isset($_SESSION['name']))
   {
    header("Location: login.php");
    exit;
   }
?>

<html>

<head>
    <title> Facebook Page </title>
</head>
<body>
<p>This is your Facebook homepage!</p>
</body>
</html>