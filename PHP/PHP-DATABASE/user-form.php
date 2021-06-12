
<?php 
  /*include('./dbconnection.php');

  if(isset($_REQUEST['submitBtn'])){
      
      if( ($_REQUEST['name'] == '') || ($_REQUEST['age'] == '') || ($_REQUEST['address'] == '') ){
          
          echo '<div class="alert alert-danger" role="alert">
                  Fill All fields...
                </div>';
      }else{
          
          $name= $_REQUEST['name'];
          $age= $_REQUEST['age'];
          $address= $_REQUEST['address'];
          
           $sql = "INSERT INTO mytest_table (name, age, address) VALUES ('$name', '$age', '$address')";
           $result = mysqli_query($conn, $sql);
            if($result){
                     echo '<div class="alert alert-success" role="alert">
                  Submitted Succesfully...
                </div>';
                 }else{
                     echo "Unable to submit";
                 }
      }
  }
*/
  
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact Form</title>
  </head>
  <body>
  

   <div class="container bg-info mt-4 p-4">
       <div class="row">
           <div class="col-md-6">
               <form  method="post">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name">
                   
                  </div>
                     <div class="form-group">
                    <label for="name">Age</label>
                    <input type="text" class="form-control" id="age" name="age"  placeholder="Enter Age">
                   
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                  </div>

                  <button type="submit" name="submitBtn" class="btn btn-warning btn-block">Submit</button>
               </form>
           </div>
       </div>
   </div>
      
      
      
      
      
      
      
      
      
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>