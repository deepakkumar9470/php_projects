<?php
    
if(!isset($_SESSION)){
     session_start();
 }

   include('./stuInclude/header.php');
  // Database connection
  include_once('../dbconnection.php');



 if(isset($_SESSION['is_login'])){
     $stuLog_Email=$_SESSION['stulogin_email'];
  }else{
     echo header('location:../index.php');
 }
   

 // Checking Email already registered
 
// End Checking Email already registered



// Update Profile Here
  if(isset($_REQUEST['changePasswordBtn'])){
      // Checking Empty Fields
      
    if(($_REQUEST['inputnew_password'] == "")){
         $passMsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">
                    Fill all Fields..
                   </div>';
        
    }else{
         $sql = "SELECT * FROM lms WHERE stu_email='$stuLog_Email'";
         $result = mysqli_query($conn, $sql);
         if(mysqli_num_rows($result) == 1){
             $stuPass=$_REQUEST['inputnew_password'];
             $sql ="UPDATE lms SET stu_pass='$stuPass' WHERE stu_email='$stuLog_Email'";
             if(mysqli_query($conn, $sql) == true){
                 $passMsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
                                Update Successfully..
                             </div>';
             }else{
                 $passMsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">
                               Unable to Update..
                             </div>';
             }
         }
        
    }
        

  }

       

?>

 <div class="col-sm-6 mt-5">
     <form class="mx-5" action="" method="post" enctype="multipart/form-data">
          
          <div class="form-group">
            <label for="input_email">Email</label>
            <input type="email" class="form-control" id="input_email" name="input_email" 
            value="<?php if(isset($stuLog_Email)){echo $stuLog_Email;} ?>" readonly>
          </div>
           <div class="form-group">
            <label for="inputnew_password"> New Password</label>
            <input type="password" class="form-control" id="inputnew_password" name="inputnew_password">
          </div>
          
          <button type="submit" class="btn btn-primary" name="changePasswordBtn" id="changePasswordBtn">Update </button>
          <button type="reset" class="btn btn-secondary" name="reset" id="reset">Reset</button>
          <?php if(isset($passMsg)){echo $passMsg;} ?>
</form>
 </div>













<?php 
  include('./stuInclude/footer.php');
?>














