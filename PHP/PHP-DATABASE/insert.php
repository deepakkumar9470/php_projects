<?php 
  include('./dbconnection.php');





 $sql = "INSERT INTO mytest_table (name, age, address) VALUES ('Abhinav Kumar', '25', 'Gopalganj')";
 $result = mysqli_query($conn, $sql);
 if($result){
     echo "<p>Data inserted Successfully</p>";
 }else{
     echo "Data inserted successfully";
 }

?>


<!doctype html>
<html>
   
   <head>
       <style>
          
           p{
             font-family: poppins;
               text-align: center;
               color: blue;
               font-weight: bolder;
           }
       </style>
   </head>
    <body>
        
    </body>
</html>