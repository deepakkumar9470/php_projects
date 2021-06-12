
<!--***** Header *****--> 
<?php
     if(!isset($_SESSION)){
        session_start();
     }
  include('./adminMainInclude/header.php');

  include('../dbconnection.php');
   
  if(isset($_REQUEST['lessonSubmitBtn'])){
      // Checking Empty Fields
      
    if(($_REQUEST['lesson_name'] == "") || ($_REQUEST['lesson_desc'] == "") || ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "")){
        
         $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">
                  Fill all Fields..
                 </div>';
        
    }else{
         $lesson_name = $_REQUEST['lesson_name'];
         $lesson_desc = $_REQUEST['lesson_desc'];
         $course_id = $_REQUEST['course_id'];
         $course_name = $_REQUEST['course_name'];
         
         $lessonvid_link = $_FILES['lesson_link']['name'];
         $lessonvid_dir = $_FILES['lesson_link']['tmp_name'];
         $lesson_link = '../lesson_videos/'.$lessonvid_link;
         move_uploaded_file($lessonvid_dir , $lesson_link);
         
         $sql =" INSERT INTO lesson (lesson_name, lesson_desc, lesson_link,course_id,course_name)
             VALUES ('$lesson_name','$lesson_desc','$lesson_link','$course_id','$course_name')";
        
          if(mysqli_query($conn, $sql) == true){
              $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
                  Lesson Added Successfully..
                 </div>';
          }else{
               $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">
                  Unable to Add Lesson..
                 </div>';
          }
        }

  }

  
?>
<!--***** End Header *****-->    


<!--*******Main Content *******--> 

 <div class="col-sm-6 mt-5 mx-4  jumbotron">
     <h3 class="text-center">Add New Lesson</h3>
     <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" name="course_id" id="course_id" 
            value=" <?php if(isset($_SESSION['course_id'])){echo $_SESSION['course_id'];} ?>" readonly>
          </div>
          <div class="form-group">
            <label for="course_name">Course Name</label>
              <input type="text" class="form-control" name="course_name" id="course_name" 
               value=" <?php if(isset($_SESSION['course_name'])){echo $_SESSION['course_name'];} ?>" readonly>
          </div>
          <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" class="form-control" name="lesson_name" id="lesson_name">
          </div>
          <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
              <textarea type="text" class="form-control" name="lesson_desc" id="lesson_desc"></textarea>
          </div>
          <div class="form-group">
            <label for="lesson_link">Lesson Video Link</label>
            <input type="file" class="form-control-file" name="lesson_link" id="lesson_link">
          </div>
          
           <div class="text-center">
             <button type="submit" class="btn btn-primary" name="lessonSubmitBtn" id="lessonSubmitBtn">Submit</button>
             <a href="lessons.php" class="btn btn-secondary">Close</a>     
           </div>
            <?php if(isset($msg)){echo $msg;} ?>
    </form>
 </div>

<!--
</div>
</div>
-->

<!--*******End Main Content *******--> 











<!--***** Footer *****--> 
<?php
  include('./adminMainInclude/footer.php');
?>
<!--***** End Footer *****--> 