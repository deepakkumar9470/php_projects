<?php
    
if(!isset($_SESSION)){
     session_start();
 }

   include('./adminMainInclude/header.php');
  // Database connection
  include_once('../dbconnection.php');



 if(isset($_SESSION['is_adminlogin'])){
         $stuAdmin_Email = $_SESSION['stuadminEmail'];
      }else{
         echo header('location:../index.php');
     }





// Update Profile Here
  if(isset($_REQUEST['changeadminPassBtn'])){
      // Checking Empty Fields
      
    if(($_REQUEST['adminnew_password'] == "")){
         $passMsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">
                    Fill all Fields..
                   </div>';
        
    }else{
         $sql = "SELECT * FROM admin_db WHERE admin_email='$stuAdmin_Email'";
         $result = mysqli_query($conn, $sql);
         if(mysqli_num_rows($result) == 1){
             $adminPass=$_REQUEST['adminnew_password'];
             $sql ="UPDATE admin_db SET admin_pass='$adminPass' WHERE admin_email='$stuAdmin_Email'";
             if(mysqli_query($conn, $sql) == true){
                 $passMsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
                                Password Updated Successfully..
                             </div>';
             }else{
                 $passMsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">
                               Unable to Update Password..
                             </div>';
             }
         }
        
    }
        

  }

       

?>

 <div class="col-sm-6 mt-5">
     <form class="mx-5" action="" method="post" enctype="multipart/form-data">
          
          <div class="form-group">
            <label for="admin_email">Email</label>
            <input type="email" class="form-control" id="admin_email" name="admin_email" 
            value="<?php if(isset($stuAdmin_Email)){echo $stuAdmin_Email;} ?>" readonly>
          </div>
           <div class="form-group">
            <label for="adminnew_password"> New Password</label>
            <input type="password" class="form-control" id="adminnew_password" name="adminnew_password">
          </div>
          
          <button type="submit" class="btn btn-primary" name="changeadminPassBtn" id="changeadminPassBtn">Update</button>
          <button type="reset" class="btn btn-secondary" name="reset" id="reset">Reset</button>
          <?php if(isset($passMsg)){echo $passMsg;} ?>
</form>
 </div>
<!--
</div>
</div>
-->












<?php 
  include('./adminMainInclude/footer.php');
?>














