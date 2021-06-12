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
    <link rel="stylesheet" href="CSS/display.css">

    <title>Bike Display</title>
  </head>
  <body>
  <nav class="navbar navbar-primary bg-primary bg py-2">
  <span class="navbar-brand mb-0 h1"><span class="badge badge-warning">Display Bikes</span></span>
      <a href="./index.php" class="text-white font-weight-bolder text-decoration-none"><i class="fas fa-chevron-circle-left mr-1"></i>Back</a>
  </nav> 
 
 <!--***** Main Section *****-->
 <div class="container">
           <div class="row d-flex justify-content-center">
               <div class="col-lg-12 col-12">
                   <div class="table-responsive">
                       <table class="table table-bordered table-hover bg-white">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col" class="py-3 text-center">Brand <sup><span class="badge badge-danger">New</span></sup></th>
                              <th scope="col" class="py-3 text-center">Name</th>
                              <th scope="col" class="py-3 text-center">Rent</th>
                              <th scope="col" class="py-3 text-center">Pic</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              include('./dbconnection.php');
                              $sql= "SELECT * FROM mybike_table";
                              $result = mysqli_query($conn, $sql);
                              while($row= mysqli_fetch_assoc($result)){
                             ?>       
                                
                                <tr>
                                  <td class="py-3 text-center"><?php echo $row['bike_brand']; ?></td>
                                  <td class="py-3 text-center"><?php echo $row['bike_name']; ?></td>
                                  <td class="py-3 text-center"><i class="fas fa-rupee-sign mr-1"></i><?php echo $row['bike_rent']; ?></td>
                                  <td class="py-3 text-center"><img src="<?php echo $row['bike_img']; ?>" alt="Bike Image" width='120' height='60'></td>
                                </tr>
                            <?php           
                              }
                             ?>
                            
                          </tbody>
                       </table>


                   </div>
               </div>
              
           </div>
       </div> 
    
 <!--***** End Main Section *****-->
 
 
  
  
  
  
  
  
  
  
  
  <script src="JavaScript/jquery.js"></script>
  <script src="JavaScript/popper.js"></script>
  <script src="JavaScript/bootstrap.js"></script>
  <script src="JavaScript/icon.js"></script>
  
  </body>
</html>