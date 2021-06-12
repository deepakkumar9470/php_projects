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

     
    $sql = "SELECT * FROM lms WHERE stu_email ='".$stuLog_Email."' ";
    $result = mysqli_query($conn,$sql);
//    $num_rows = mysqli_num_rows($result);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $stu_Id=$row['stu_id'];
        $stu_Name=$row['stu_name'];
        $stu_Occupation=$row['stu_occ'];
        $stu_Image=$row['stu_image'];
    }
 
// End Checking Email already registered



// Update Profile Here
  if(isset($_REQUEST['updateStuProfileBtn'])){
      // Checking Empty Fields
      
    if(($_REQUEST['stu_name'] == "")){
         $passMsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">
                    Fill all Fields..
                   </div>';
        
    }else{
         $stuName = $_REQUEST['stu_name'];
         $stuOccupation = $_REQUEST['stu_occ'];
         $stuImage = $_FILES['stu_image']['name'];
        
         $stu_image = $_FILES['stu_image']['name'];
         $stu_image_dir =$_FILES['stu_image']['tmp_name'];
         $image_folder = '../Images/stu_Images/'.$stu_image;
         move_uploaded_file($stu_image_dir , $image_folder);
         
         
         $sql = "UPDATE lms SET stu_name='$stuName',stu_occ='$stuOccupation',stu_image='$image_folder' WHERE stu_email='$stuLog_Email'";
         
          if(mysqli_query($conn, $sql) == true){
              $passMsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
                  Profile Updated Successfully..
                 </div>';
          }else{
               $passMsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">
                  Unable to Update Course..
                 </div>';
          }
        }

       }
       

?>

 <div class="col-sm-6 mt-5">
     <form class="mx-5" action="" method="post" enctype="multipart/form-data">
          
          <div class="form-group">
            <label for="stu_id">Student ID</label>
            <input type="text" class="form-control" id="stu_id" name="stu_id" 
            value="<?php if(isset($stu_Id)){echo $stu_Id;} ?>" readonly>
          </div>
           <div class="form-group">
            <label for="stu_email">Email</label>
            <input type="email" class="form-control" id="stu_email" name="stu_email" 
            value="<?php echo $stuLog_Email; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="stu_name"> Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name" 
            value="<?php if(isset($stu_Name)){echo $stu_Name ;} ?>">
          </div>
           <div class="form-group">
            <label for="stu_occ"> Occupation</label>
            <input type="text" class="form-control" id="stu_occ" name="stu_occ" 
            value="<?php if(isset($stu_Occupation)){echo $stu_Occupation ;} ?>">
          </div>
           <div class="form-group">
            <label for="stu_image">Upload Image</label>
            <input type="file" class="form-control-file" id="stu_image" name="stu_image">
          </div>
          <button type="submit" class="btn btn-primary" name="updateStuProfileBtn" id="updateStuProfileBtn">Update Profile</button>
          <?php if(isset($passMsg)){echo $passMsg;} ?>
</form>
 </div>













<?php 
  include('./stuInclude/footer.php');
?>














