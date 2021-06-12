<!--*********** Navigation Include Here (Header) *************-->
 <?php
   include_once('./dbconnection.php');
   include('./maininclude/navigation.php');
  ?>
<!--*********** Navigation Include Here(Header)*************--> 



<!--*********** Course Page Banner *************--> 

  <div class="container-fluid bg-dark">
      <div class="row">
          <img src="Images/bookbanner.jpg" alt="courser" style="height:500px; width:100%; object-fit:cover;
          box-shadow:10px;">
      </div>
  </div>

<!--*********** End Course Page Banner *************--> 

 
<!--*********** Course Main Section *************--> 

<div class="container mt-5">
       <?php
        if(isset($_GET['course_id'])){
             $course_id = $_GET['course_id'];  
             $_SESSION['course_id']=$course_id;
              $sql = "SELECT * FROM course WHERE course_id='$course_id'";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
               }
          ?>
      <div class="row">
         <div class="col-md-4 mb-2">
            <img src="<?php echo str_replace('..','.',$row['course_image']);?>" alt="Course Image"> 
         </div>
          
        <div class="col-md-8 text-center">
            <div class="card-body">
                <h5 class="card-title">Course Name:<?php echo $row['course_name']; ?></h5>
                <p class="card-text">Description:<?php echo $row['course_desc']; ?> </p>
                <p class="card-text">Duration:<?php echo $row['course_duration']; ?></p><tabel></tabel>
                <form action="checkout.php" method="post">
                  <p class="card-text d-inline">Price:<small><del>&#8377 <?php echo $row['course_original_price']; ?></del></small><span class="font-weight-bolder">&#8377 <?php echo $row['course_price']; ?> </span></p>
                  <input type="hidden" name="id" value="<?php echo $row['course_price']?>">
                  <button type="submit" class="btn btn-primary  name=""buy text-white font-weight-bolder float-right">Buy now</button>
                </form>
            </div>
        </div>  
          
      </div>
      
          <div class="container">
              <div class="row">
                 <table class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th scope="col">Lesson No.</th>
                              <th scope="col">Lesson Name</th>
                          </tr>
                      </thead>
                      <tbody>
                 <?php
                   $sql= "SELECT * FROM lesson ";  
                   $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        $num =0;
                        while($row = mysqli_fetch_assoc($result)){
                         if($course_id == $row['course_id']){
                             $num++;
                            echo 
                              '<tr>
                              <th scope="row">'.$num.'</th>
                              <td>'.$row['lesson_name'].'</td>
                             </tr>'; 
                            }
                            
                        }
                    }
                    
                ?>
                 
                          
                      </tbody>
                  </table>
              </div>
            </div>
</div>
      
  

<!--*********** End Course Main Section*************--> 






<!--*********** Footer Include Here (Footer) *************-->        
 <?php
   include('./maininclude/footer.php');
  ?>                         
<!--*********** Footer Include Here (Footer) *************-->