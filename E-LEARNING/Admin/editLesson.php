<!--editCourse.php-->
<!--***** Header *****--> 
<?php
  include('./adminMainInclude/header.php');

  include('../dbconnection.php');
   

// Update Course Here
  if(isset($_REQUEST['lessonUpdateBtn'])){
      // Checking Empty Fields
      
     if(($_REQUEST['lesson_id'] == "") || ($_REQUEST['lesson_name'] == "") || ($_REQUEST['lesson_desc'] == "") || ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "")){
        
         $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">
                  Fill all Fields..
                 </div>';
        
     } else{
         $lesson_id = $_REQUEST['lesson_id'];
         $lesson_name = $_REQUEST['lesson_name'];
         $lesson_desc = $_REQUEST['lesson_desc'];
         $course_id = $_REQUEST['course_id'];
         $course_name = $_REQUEST['course_name'];
         
         $lessonvid_link = $_FILES['lesson_link']['name'];
         $lessonvid_dir = $_FILES['lesson_link']['temp_name'];
         $lesson_link = '../lesson_videos/'.$lessonvid_link;
         move_uploaded_file($lessonvid_dir , $lesson_link);
         
         
          $sql ="UPDATE lesson SET lesson_id='$lesson_id',lesson_name='$lesson_name',lesson_desc='$lesson_desc',lesson_link='$lesson_link',course_id='$course_id',course_name='$course_name' WHERE lesson_id='$lesson_id' ";
         
          if(mysqli_query($conn, $sql) == true){
              $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
                  Lesson Updated Successfully..
                 </div>';
          }else{
               $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">
                  Unable to Update Lesson..
                 </div>';
          }
    }
         
        
        

  }

  
?>
<!--***** End Header *****-->    


<!--*******Main Content *******--> 

 <div class="col-sm-6 mt-5 mx-4  jumbotron">
     <h3 class="text-center">Update Lesson Details</h3>
     
       <?php
           if(isset($_REQUEST['editLesson'])){
                $sql = "SELECT * FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                
            }
        ?>
     <form action="" method="post" enctype="multipart/form-data">
         <div class="form-group">
            <label for="lesson_id">Lesson ID</label>
            <input type="text" class="form-control" name="lesson_id" id="lesson_id" 
             value= "<?php if(isset($row['lesson_id'])){echo $row['lesson_id'];} ?>" readonly>
          </div>
          <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" class="form-control" name="course_name" id="lesson_name" 
             value= "<?php if(isset($row['lesson_name'])){echo $row['lesson_name'];} ?>">
          </div>
          <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
              <textarea type="text" class="form-control" name="lesson_desc" id="lesson_desc" rows="2"><?php if(isset($row['lesson_desc'])){echo $row['lesson_desc'];} ?></textarea>
          </div>
          <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" name="course_id" id="course_id" value= "<?php if(isset($row['course_id'])){echo $row['course_id'];} ?>" readonly>
          </div>
          <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" name="course_name" id="course_name"  value= "<?php if(isset($row['course_name'])){echo $row['course_name'];} ?>" readonly>
          </div>
          <div class="form-group">
            <label for="lesson_link">Lesson Link</label>
            <input type="file" class="form-control-file" name="lesson_link" id="lesson_link" value= "<?php if(isset($row['lesson_link'])){echo $row['lesson_link'];} ?>">
          </div>
           <div class="text-center">
             <button type="submit" class="btn btn-success" name="lessonUpdateBtn" id="lessonUpdateBtn">Update</button>
             <a href="lessons.php" class="btn btn-secondary">Close</a>     
           </div>
            <?php if(isset($msg)){echo $msg;} ?>
    </form>
 </div>

</div>
</div>

<!--*******End Main Content *******--> 











<!--***** Footer *****--> 
<?php
  include('./adminMainInclude/footer.php');
?>
<!--***** End Footer *****--> 