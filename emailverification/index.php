


<?php
  session_start();
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email = $_POST['email'];
  $code = rand(100000,999999);

  $_SESSION['email'] = $email;
  $_SESSION['code'] = $code;

  echo "<p>Verfication code sent to email is : <Strong> $code </strong> </p>";
  echo "<a href='verify.php'>Click here to verify</a>";
  exit;
  }
  



?>


<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
</head>
<body>
    <form method = "POST" action="">
     <input type = "email" name ="email" placeholder = "Enter your email">
     <input type = "submit" name = "submit" value = "Verify Email">


    </form>
</body>
</html>