<?php 
   
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $db = 'bike';
  

   $conn= mysqli_connect($server , $username, $password, $db);
   if($conn){
//       echo "<h2>Connection Sucessfully</h2>";
   }else{
       echo "Failed to Connect".mysqli_connect_error();
    }

?>



