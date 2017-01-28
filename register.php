<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname= 'users';
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$link) {
  die('Connect Error (' . mysqli_connect_errno() . ') '
          . mysqli_connect_error());
}

echo 'Success... ' . mysqli_get_host_info($link) . "\n";

mysqli_close($link);
  /*$email=$_POST['email'];
  $password=$_POST['password'];
  $confirm_password=$_POST['confirm_password'];
  if(!empty($email) && !empty($password) && !empty($confirm_password)){
    if($password==$confirm_password){
      echo 'Registration Successfull';
    }
  }
  else{
    echo 'Please enter email and password';
  }
  $dbhost = 'localhost:3306';
  $dbuser = 'root';
  $dbpass = '';
  if(! get_magic_quotes_gpc() ) {
    $emp_name = addslashes ($_POST['emp_name']);
    $emp_address = addslashes ($_POST['emp_address']);
  }else {
    $emp_name = $_POST['emp_name'];
    $emp_address = $_POST['emp_address'];
  }
  $conn=mysql_connect($dbhost, $dbuser, $dbpass);
  if(!$conn){
    die("Unable to connect".mysql_error());
  }
  else{
    echo "Connection Successfull";
  }
  $sql="INSERT INTO users_table "."(email,password) "."VALUES ($email,$password)";
  mysql_select_db('users');
  $retval = mysql_query( $sql, $conn );
  if(! $retval ) {
    die('Could not enter data: ' . mysql_error());
  }
  echo "Entered data successfully\n";
  mysql_close($conn);*/
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
   <form action="register.php" method="POST">
     <input type="email" placeholder="Email" name="email" />
     <input type="password" placeholder="Password" name="password" />
     <input type="password" placeholder="Confirm Password" name="confirm_password" />
     <input type="submit" />
   </form>
</body>
</html>
