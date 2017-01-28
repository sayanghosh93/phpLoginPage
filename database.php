<?php
$user='root';
$password='';
$db='users';
$conn=new mysqli('localhost',$user,$password,$db);
if(!$conn){
  die("Unable to connect".mysql_error());
}
else{
  echo "Connection Successfull";
}
 ?>
