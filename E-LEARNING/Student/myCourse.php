
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
   
?>


<!--***** Main Content *****-->
 <div class="container mt-5 ml-4">
      <div class="row mt-4">
          <div class="jumbotron">
              <h1 class="text-center">All Courses</h1>
              <?php
                $sql = "SELECT  co.order_id, c.course_id, c.course_name,c.course_duration,c.course_desc,c.course_image,c.course_author,
                c.course_original_price, c.course_price FROM course_order AS co JOIN course AS c ON c.course_id= co.course_id WHERE co.stu_email='$stuLog_Email'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while( $row = mysqli_fetch_assoc($result)){ ?>
                        <div class="bg-light mb-3">
                          <h5 class="card-header"><?php echo $row['course_name'];?></h5>
                          <div class="row">
                            <div class="col-sm-3">
                              <img src="<?php echo $row['course_image']; ?>" alt="Course Pic" class="card-img-top mt-4">
                             </div>   
                                <div class="col-sm-6 mb-3">
                                  <div class="card-body">
                                    <p class="card-title"><?php echo $row['course_desc']; ?></p>
                                    <small class="card-text">Description:<?php echo $row['course_duration']; ?></small> <br/>
                                    <small class="card-text">Instructor:<?php echo $row['course_author']; ?></small><br/>
                                    <p class="card-text d-inline">Price:<small><del>&#8377 <?php echo $row['course_original_price'];?></del></small>
                                    <span class="font-weight-bolder">&#8377 <?php echo $row['course_price']; ?>
                                    </span></p>
                                    <a href="watchcourse.php?course_id=<?php echo $row['course_id']; ?>" class="btn btn-primary mt-5 float-right">Watch Course</a>  
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          <?php
                              }
                             }
              
                            ?>
                     <hr/>
                </div>
          </div>   
       </div>
     

  
<!--***** End Main Content *****-->












<!--***** Footer*****-->

<?php 
  include('./stuInclude/footer.php');
?>
<!--*****End Footer*****-->