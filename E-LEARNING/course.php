<!--*********** Navigation Include Here (Header) *************-->
 <?php
   include_once('./dbconnection.php');
   include('./maininclude/navigation.php');
  ?>
<!--*********** Navigation Include Here(Header)*************--> 



<!--*********** Course Page Banner *************--> 

  <div class="container-fluid bg-dark">
      <div class="row">
          <img src="Images/book.jpg" alt="courser" style="height:500px; width:100%; object-fit:cover;
          box-shadow:10px;">
      </div>
  </div>

<!--*********** End Course Page Banner *************--> 



<!--*********** All Courses Section *************-->
 
  <div class="container mt-5">
      <h1 class="text-center">All Courses</h1>
    
       <div class="row mt-4">
            <?php
              $sql = "SELECT * FROM course";
              $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                $course_id=$row['course_id'];
                //$new_image=str_replace('..','.',$stu_img);
                echo '
                   <div class="col-sm-4 mb-4">
                    <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align:left; padding:0px;">
                         <div class="card" style=" width: 100%; max-height:500px;">
                          <img class="card-img-top" style=" width: 100%; max-height:auto;" src="'.str_replace('..','.',$row['course_image']).'" alt="Course Image">
                          <div class="card-body">
                              <h5 class="card-title">'.$row['course_name'].'</h5>
                              <p class="card-text">'.$row['course_desc'].'</p>
                          </div>
                              <div class="card-footer">
                                  <p class="card-text d-inline">Price:<small><del>&#8377 '.$row['course_original_price'].'</del></small><span class="font-weight-bolder">&#8377 '.$row['course_price'].'
                                  </span></p>
                                  <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                              </div>
                        </div>
                       </a>
                   </div>';        
                }
              }
             ?>
       </div>
     
</div>
  
<!--*********** End All Courses Section *************-->   
 

 







<!--*********** Footer Include Here (Footer) *************-->        
 <?php
   include('./maininclude/footer.php');
  ?>                         
<!--*********** Footer Include Here (Footer) *************-->




<!--
</body>
</html>-->
