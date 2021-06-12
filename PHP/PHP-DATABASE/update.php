
<?php 

include('./dbconnection.php');
//include('./retrieve.php');

if(isset($_REQUEST['editBtn'])){
    if( ($_REQUEST['name'] == '') || ($_REQUEST['age'] == '') || ($_REQUEST['address'] == '')){
        
         $name = $_REQUEST['name'];
         $age = $_REQUEST['age'];
         $address = $_REQUEST['address'];
        
        $sql= "UPDATE mytest_table SET name='$name', age='$age', address='$address' WHERE id={$_REQUEST['id']}";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo 'Updated  Success';
        }else{
          echo 'Unable to update'; 
        }  
     }else{
          echo "Unable to Update Records";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PHP Data Retrieve</title>
  </head>
  <body>
    <h3 class="text-primary text-center mb-3 mt-2">Data Show on a table</h3>
     <div class="container bg-light mt-4 p-4">
       <div class="row">
           <div class="col-md-6">
                <?php
                   if(isset($_REQUEST['editBtn'])){
                    $sql = "SELECT * FROM mytest_table";
                    $result= mysqli_query($conn,$sql);
                    $row=mysqli_fetch_assoc($result);
                        
                    }
                   ?>
               <form  method="post">
               
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name" value="<?php if(isset($row['name'])){ echo $row['name'];} ?>">
                  </div>
                   
                 <div class="form-group">
                    <label for="name">Age</label>
                    <input type="text" class="form-control" id="age" name="age"  placeholder="Enter Age" value="<?php if(isset($row['age'])){ echo $row['age'];} ?>">
                 </div>
                 
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" value="<?php if(isset($row['address'])){ echo $row['address'];} ?>">
                  </div>

                  <button type="submit" name="submitBtn" class="btn btn-warning btn-md">Submit</button>
                  <button type="submit" name="editBtn" class="btn btn-success btn-md" id="id">Edit</button>  
               </form>
               
           </div>
           <div class="col-md-6">
                <?php 
             $sql = "SELECT * FROM mytest_table";
             $result= mysqli_query($conn,$sql);
             if(mysqli_num_rows($result) > 0){
              echo ' <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Address</th>
                </tr>
              </thead>
              <tbody>';
             while($row = mysqli_fetch_assoc($result)){
                   
                echo '<tr>
                  <th scope="row">'.$row['id'].'</th>
                  <td>'.$row['name'].'</td>
                  <td>'.$row['address'].'</td>
                  </tr>';
               
                  }
               echo '</tbody>';

            echo '</table>';   
            } else{
                 echo '0 Records Field';
             }
          
         ?>
           </div>
       </div>
   </div>
      
      
      
      

   
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>