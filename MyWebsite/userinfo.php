<?php
// username, email, mobile, comment
 
$server= "sql213.epizy.com";
$username= "epiz_26483751";
$password= "U47or09xKF7WT";
$db= "epiz_26483751_website_db";


$conn=mysqli_connect($server, $username, $password, $db);
  
 if($conn){
      echo "Connection Successful";
  }else{
      die("Not Connected".mysqli_connect_error($conn));
  }
 
   mysqli_select_db($conn,"website_db");

// Taking data from db

$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];

$sqlquery= "INSERT INTO chouhan(username, email, mobile, comments) 
            VALUES ('$username', '$email', '$mobile' ,'$comments') ";

mysqli_query($conn ,$sqlquery); // fire query
header("location:index.php");

?>