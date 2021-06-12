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
    }
 
// End Checking Email already registered



// Update Profile Here
  if(isset($_REQUEST['submitfeedbackBtn'])){
      // Checking Empty Fields
      
    if(($_REQUEST['f_content'] == "")){
         $passMsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">
                    Fill all Fields..
                   </div>';
        
    }else{
         $f_content = $_REQUEST['f_content'];
         
         $sql = "INSERT INTO  feedback  (f_content, stu_id) VALUES ('$f_content', '$stu_Id')";
         
          if(mysqli_query($conn, $sql) == true){
              $passMsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
                  Submit Successfully..
                 </div>';
          }else{
               $passMsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">
                  Unable to Submit..
                 </div>';
          }
        }

       }
       

?>

 <div class="col-sm-6 mt-5">
     <form class="mx-5" action="" method="post" enctype="multipart/form-data">
          
          <div class="form-group">
            <label for="f_id">Student ID</label>
            <input type="text" class="form-control" id="f_id" name="f_id" 
            value="<?php if(isset($stu_Id)){echo $stu_Id;} ?>" readonly>
          </div>
           <div class="form-group">
            <label for="f_content">Write Feeback</label>
            <textarea type="text" class="form-control" id="f_content" name="f_content"></textarea>
          </div>
          
          <button type="submit" class="btn btn-primary" name="submitfeedbackBtn" id="submitfeedbackBtn">Submit </button>
          <?php if(isset($passMsg)){echo $passMsg;} ?>
</form>
 </div>













<?php 
  include('./stuInclude/footer.php');
?>














