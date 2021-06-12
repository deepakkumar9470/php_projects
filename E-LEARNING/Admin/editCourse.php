<!--editCourse.php-->
<!--***** Header *****--> 
<?php
  include('./adminMainInclude/header.php');

  include('../dbconnection.php');
   

// Update Course Here
  if(isset($_REQUEST['courseUpdateBtn'])){
      // Checking Empty Fields
      
    if(($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_author'] == "") || ($_REQUEST['course_duration'] == "") || ($_REQUEST['course_price'] == "") || ($_REQUEST['course_original_price'] == "")){
         $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">
                  Fill all Fields..
                 </div>';
        
    }else{
         $c_id = $_REQUEST['course_id'];
         $c_name = $_REQUEST['course_name'];
         $c_desc = $_REQUEST['course_desc'];
         $c_author = $_REQUEST['course_author'];
         $c_duration = $_REQUEST['course_duration'];
         $c_price = $_REQUEST['course_price'];
         $c_original_price = $_REQUEST['course_original_price'];
         $c_image = '../Images/course_images/'.$_FILES['course_image']['name'];
         
         
         $sql = "UPDATE course SET course_id='$c_id', course_name='$c_name',course_desc='$c_desc',course_author='$c_author',course_image='$c_image',course_duration='$c_duration',course_price='$c_price',course_original_price='$c_original_price' WHERE course_id='$c_id' ";
         
          if(mysqli_query($conn, $sql) == true){
              $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
                  Updated Successfully..
                 </div>';
          }else{
               $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">
                  Unable to Update Course..
                 </div>';
          }
        }

  }

  
?>
<!--***** End Header *****-->    


<!--*******Main Content *******--> 

 <div class="col-sm-6 mt-5 mx-4  jumbotron">
     <h3 class="text-center">Update Course</h3>
     
       <?php
           if(isset($_REQUEST['editCourse'])){
                $sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['id']}";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                
            }
        ?>
     <form action="" method="post" enctype="multipart/form-data">
         <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" name="course_id" id="course_id" 
             value= "<?php if(isset($row['course_id'])){echo $row['course_id'];} ?>" readonly>
          </div>
          <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" name="course_name" id="course_name" 
             value= "<?php if(isset($row['course_name'])){echo $row['course_name'];} ?>">
          </div>
          <div class="form-group">
            <label for="course_desc">Course Description</label>
              <textarea type="text" class="form-control" name="course_desc" id="course_desc" rows="2"><?php if(isset($row['course_desc'])){echo $row['course_desc'];} ?></textarea>
          </div>
          <div class="form-group">
            <label for="course_author">Autor</label>
            <input type="text" class="form-control" name="course_author" id="course_author" value= "<?php if(isset($row['course_author'])){echo $row['course_author'];} ?>">
          </div>
          <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" name="course_duration" id="course_duration"  value= "<?php if(isset($row['course_duration'])){echo $row['course_duration'];} ?>">
          </div>
          <div class="form-group">
            <label for="course_original_price">Course Original Price</label>
            <input type="text" class="form-control" name="course_original_price" id="course_original_price" value= "<?php if(isset($row['course_original_price'])){echo $row['course_original_price'];} ?>">
          </div>
          <div class="form-group">
            <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" name="course_price" id="course_price" value= "<?php if(isset($row['course_price'])){echo $row['course_price'];} ?>">
          </div>
           <div class="form-group">
            <label for="course_image">Course Image</label>
            <img src="<?php if(isset($row['course_image'])){echo $row['course_image']; } ?>" alt="" class="img-thumbnail">
            <input type="file" class="form-control-file" name="course_image" id="course_image">
          </div>
           <div class="text-center">
             <button type="submit" class="btn btn-success" name="courseUpdateBtn" id="courseUpdateBtn">Update</button>
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