<?php
  require "./connect.php";
  
  $login = $_POST['username'];
  $pass = md5($_POST['password']);
  
  $sql = "SELECT * FROM 'Users' WHERE user='$login' AND pass='$pass'";
  $result = mysql_query($sql);
?>
