<?php
 $server = 'localhost';
 $user = 'root';
 $password = '';
 $db_name = 'learning-ms';


 $conn =mysqli_connect($server , $user ,$password ,$db_name);
 
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>