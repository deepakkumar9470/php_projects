<?php
  include('./dbconnection.php');
   
   if(isset($_POST['submit'])){
       
       if( ($_POST['brand'] == '') || ($_POST['name'] == '') || ($_POST['rent'] == '')){
           echo ' <small class="alert alert-warning">Fill All fields..</small>';
           
       }else{
           
           $bike_brand = $_POST['brand'];
           $bike_name = $_POST['name'];
           $bike_rent = $_POST['rent'];
           
           $image = $_FILES['image']['name'];
           $image_temp = $_FILES['image']['tmp_name'];
           $image_dir= 'uploaded_img/'.$image;
           move_uploaded_file($image_temp, $image_dir);
           
           $sql = "INSERT INTO `mybike_table`(`bike_brand`, `bike_name`, `bike_rent`, `bike_img`) VALUES ('$bike_brand','$bike_name','$bike_rent','$image_dir')";
           $result= mysqli_query($conn , $sql);
           
           if($result){
//               echo '<small class="alert alert-success">Successfully Submitted</small>';
        
           }else{
               echo '<small class="alert alert-danger">Unable to Submit</small>';
           }
            header('location:display.php');   
       }
       
   }
  



?>








<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/fonts.css">
    <link rel="stylesheet" href="CSS/icon.css">
    <link rel="stylesheet" href="CSS/index.css">

    <title>PHP Bikes</title>
  </head>
  <body>
 <nav class="navbar navbar-secondary bg-secondary ">
  <span class="navbar-brand mb-0 h1 text-white">Awesome Bikes</span>
 </nav>  
    
<!--***** Main Section *****-->
 <section class="form my-4 mx-5">
     <div class="container">
         <div class="row no-gutters">
             <div class="col-lg-5">
                 <img src="Images/new_harley.jpg" alt="">
             </div>
             <div class="col-lg-7 px-5 pt-5">
                <h3 class="text-white text-center myhead">Welcome to Adventure of Bikes</h3>
                 <form action="" method="post" enctype="multipart/form-data">
                     <div class="form-row">
                         <div class="col-lg-7">
                              <input type="text" class="form-control my-3 p-2 round" id="brand" name="brand" placeholder="Enter Bike Brand" required>
                         </div>
                     </div>
                     <div class="form-row">
                         <div class="col-lg-7">
                              <input type="text" class="form-control my-3 p-2 round" id="name" name="name" placeholder="Enter Bike Name" required>
                         </div>
                     </div>
                      <div class="form-row">
                         <div class="col-lg-7">
                              <input type="text" class="form-control my-3 p-2 round" id="rent" name="rent" placeholder="Enter Bike Rent" required>
                         </div>
                     </div>
                     <div class="form-row">
                         <div class="col-lg-7">
                              <input type="file" class="form-control-file round" id="image" name="image">
                         </div>
                     </div>
                       <div class="form-row">
                         <div class="col-lg-7">
                              <button type="submit" name="submit" class="btn btn-primary mb-3 my-3 p-2 btn-block mybtn">Submit</button>
                              <a href="display.php" class="btn btn-info my-3 p-2  btn-sm"><i class="fas fa-chevron-right mr-2"></i>Check Bikes</a>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </section>
 
<!--***** End Main Section *****-->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <script src="JavaScript/jquery.js"></script>
  <script src="JavaScript/popper.js"></script>
  <script src="JavaScript/bootstrap.js"></script>
  <script src="JavaScript/icon.js"></script>
  <script src="JavaScript/sweet_alert.js"></script>
  
  </body>
</html>