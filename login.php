<?php
require 'database.php';
if (!empty($_POST['email']) && !empty($_POST['password'])):
endif;
?>

<html>
<head>
  <title>Login Below</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <div class="header">
    <a href="index.php">Your app name</a>
  </div>
  <h2>Login</h2>
  <span>or <a href="register.php">Register here</a></span>
 <form action="login.php" method="POST">
   <input type="email" placeholder="Email" name="email" />
   <input type="password" placeholder="Password" name="passwd" />
   <input type="submit" />
 </form>
</body>
</html>
