<?php 
   
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $db = 'test';


   $conn= mysqli_connect($server , $username, $password, $db);
   if($conn){
//       echo "<h2>Connection Sucessfully</h2>";
   }else{
       echo "Failed to Connect".mysqli_connect_error();
   }

?>



<!doctype html>
<html>
   
   <head>
       <style>
           h2{
              color: blue;
               text-align: center;
               font-weight: bold;
           }
           p{
             font-family: poppins;
               text-align: center;
               color: greenyellow;
               font-weight: bolder;
           }
       </style>
   </head>
    <body>
        
    </body>
</html>