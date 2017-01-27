<?php
require 'database.php';
if (!empty($_POST['email']) && !empty($_POST['password'])):
  //Enter new user to the DB
  $sql="INSERT INTO users (email,password) VALUES (:email,:password);"
  $stmt=$conn->prepare($sql);
  $stmt->bindparam(':email',$_POST['email']);
  $stmt->bindparam(':password',password_hash($_POST['password']),PASSWORD_BCRYPT);
  if($stmt->exeute()):
    die('Success');
  else:
      die('Fail');
endif;

 ?>

<html>
<head>
  <title>Register Below</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <div class="header">
    <a href="index.php">Your app name</a>
  </div>
   <h2>Register</h2>
   <span>or <a href="login.php">Login here</a></span>
   <form action="login.php" method="POST">
     <input type="email" placeholder="Email" name="email" />
     <input type="password" placeholder="Password" name="password" />
     <input type="password" placeholder="Confirm Password" name="confirm_password" />
     <input type="submit" />
   </form>
</body>
</html>
