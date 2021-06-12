
<!--***** Header *****--> 
<?php
  include('./adminMainInclude/header.php');

  include('../dbconnection.php');
   
  if(isset($_REQUEST['courseSubmitBtn'])){
      // Checking Empty Fields
      
    if(($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_author'] == "") || ($_REQUEST['course_duration'] == "") || 
    ($_REQUEST['course_price'] == "") || ($_REQUEST['course_original_price'] == "")){
         $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">
                  Fill all Fields..
                 </div>';
        
    }else{
         $course_name = $_REQUEST['course_name'];
         $course_desc = $_REQUEST['course_desc'];
         $course_author = $_REQUEST['course_author'];
         $course_duration = $_REQUEST['course_duration'];
         $course_price = $_REQUEST['course_price'];
         $course_original_price = $_REQUEST['course_original_price'];
        
         $course_image = $_FILES['course_image']['name'];
         $course_image_dir = $_FILES['course_image']['tmp_name'];
         $image_folder = '../Images/course_images/'.$course_image;
         move_uploaded_file($course_image_dir , $image_folder);
           
          //echo "<img src='$image_folder' height='100' width='100'/>"; 
          
         $sql = "INSERT INTO course (course_name, course_desc, course_author, course_image,                     course_duration, course_price, course_original_price) VALUES 
               ('$course_name' , '$course_desc', '$course_author' , '$image_folder', '$course_duration', '$course_price', '$course_original_price')";
          if(mysqli_query($conn, $sql) == true){
              $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
                  Course Added Successfully..
                 </div>';
          }else{
               $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">
                  Unable to Add Course..
                 </div>';
          }
        }

  }

  
?>
<!--***** End Header *****-->    


<!--*******Main Content *******--> 

 <div class="col-sm-6 mt-5 mx-4  jumbotron">
     <h3 class="text-center">Add New Course</h3>
     <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" name="course_name" id="course_name">
          </div>
          <div class="form-group">
            <label for="course_desc">Course Description</label>
              <textarea type="text" class="form-control" name="course_desc" id="course_desc" rows="2"></textarea>
          </div>
          <div class="form-group">
            <label for="course_author">Autor</label>
            <input type="text" class="form-control" name="course_author" id="course_author">
          </div>
          <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" name="course_duration" id="course_duration">
          </div>
          <div class="form-group">
            <label for="course_original_price">Course Original Price</label>
            <input type="text" class="form-control" name="course_original_price" id="course_original_price">
          </div>
          <div class="form-group">
            <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" name="course_price" id="course_price">
          </div>
           <div class="form-group">
            <label for="course_image">Course Image</label>
            <input type="file" class="form-control-file" name="course_image" id="course_image">
          </div>
           <div class="text-center">
             <button type="submit" class="btn btn-primary" name="courseSubmitBtn" id="courseSubmitBtn">Submit</button>
             <a href="courses.php" class="btn btn-secondary">Close</a>     
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