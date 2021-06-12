<!--***** Header *****--> 
<?php
   if(!isset($_SESSION)){
       session_start();
    }
  include('./adminMainInclude/header.php');
  include('../dbconnection.php');


 
    if(isset($_SESSION['is_adminlogin'])){
         $stuAdmin_Email = $_SESSION['stuadminLogin_email'];
          }else{
             echo header('location:../index.php');
         }

  // We want to dispaly data from three tables i.e: lms, course,course_order

     $sql = "SELECT * FROM lms ";
     $result = mysqli_query($conn, $sql);
     $totalStudents=mysqli_num_rows($result);

     $sql = "SELECT * FROM course ";
     $result = mysqli_query($conn, $sql);
     $totalCourse=mysqli_num_rows($result);

     $sql = "SELECT * FROM course_order ";
     $result = mysqli_query($conn, $sql);
     $totalSold=mysqli_num_rows($result);

?>
<!--***** End Header *****-->        
   
   <div class="col-sm-9 mt-5">
           <div class="row mx-5 text-center">
              <div class="col-sm-4 mt-5">
                  <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                  <div class="card-header">Courses</div>
                   <div class="card-body">
                    <h5 class="card-title"><?php echo $totalCourse;?></h5>
                    <a href="courses.php" class="btn text-white">View</a>
                   </div>
                </div>
              </div>
              
              <div class="col-sm-4 mt-5">
                  <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                  <div class="card-header">Students</div>
                   <div class="card-body">
                    <h5 class="card-title"><?php echo $totalStudents;?></h5>
                    <a href="students.php" class="btn text-white">View</a>
                   </div>
                </div>
              </div>
              
              <div class="col-sm-4 mt-5">
                  <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                  <div class="card-header">Sold</div>
                   <div class="card-body">
                    <h5 class="card-title"><?php echo $totalSold;?></h5>
                    <a href="sellReport.php" class="btn text-white">View</a>
                   </div>
                </div>
              </div>
           </div>
           
       <div class="mx-5 mt-5 text-center">
        <p class="bg-dark text-white p-2">Courses Ordered</p>
        
         <?php
            $sql = "SELECT * FROM course_order ";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
              echo '<table class="table">
                    <thead>
                    <tr>
                      <th scope="col">Order ID</th>
                      <th scope="col">Course ID</th>
                      <th scope="col">Student Email</th>
                      <th scope="col">Order Date</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>';
                 while ($row = mysqli_fetch_assoc($result)){
                     echo '<tr>
                          <td scope="row">'.$row['order_id'].'</td>
                          <td scope="row">'.$row['course_id'].'</td>
                          <td scope="row">'.$row['stu_email'].'</td>
                          <td scope="row">'.$row['txn_date'].'</td>
                          <td scope="row">'.$row['amount'].'</td>
                          <td>
                               <form action="" method="post" class="d-inline"><input type="hidden" class="" name="id" value="'.$row['co_id'].'"><button type="button" class="btn btn-primary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>
                               </form>
                            </td>
                         </tr>';
                      }
                
                  echo '</tbody>
                       </table>';
                } else{
                    echo '0 Results..';
                  }
             //Delete Id by here
              
              if(isset($_REQUEST['delete'])){
                  $sql = "DELETE FROM course_order WHERE co_id={$_REQUEST['id']}";
                  
                  if(mysqli_query($conn,$sql) == true){
                      echo '<meta http-equiv="refresh" content="0; URL=?deleted"/>';
                  }else{
                      echo "Unable to Delete..";
                  }
              }
    
             
              ?>
    </div>
           
          </div>
       </div>
   </div>
   
   <!--***** End Side Bar *****-->

<!--********** End Top Nav Bar **********-->
   
<!--
    <div class="mx-5 mt-5 text-center">
        <p class="bg-dark text-white p-2">Courses Ordered</p>
        
         <?php
            $sql = "SELECT * FROM course_order ";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
              echo '<table class="table">
                    <thead>
                    <tr>
                      <th scope="col">Order ID</th>
                      <th scope="col">Course ID</th>
                      <th scope="col">Student Email</th>
                      <th scope="col">Order Date</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>';
                 while ($row = mysqli_fetch_assoc($result)){
                     echo '<tr>
                          <td scope="row">'.$row['order_id'].'</td>
                          <td scope="row">'.$row['course_id'].'</td>
                          <td scope="row">'.$row['stu_email'].'</td>
                          <td scope="row">'.$row['txn_date'].'</td>
                          <td scope="row">'.$row['amount'].'</td>
                          <td>
                               <form action="" method="post" class="d-inline"><input type="hidden" class="" name="id" value="'.$row['co_id'].'"><button type="button" class="btn btn-primary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>
                               </form>
                            </td>
                         </tr>';
                      }
                
                  echo '</tbody>
                       </table>';
                } else{
                    echo '0 Results..';
                  }
             //Delete Id by here
              
              if(isset($_REQUEST['delete'])){
                  $sql = "DELETE FROM course_order WHERE co_id={$_REQUEST['id']}";
                  
                  if(mysqli_query($conn,$sql) == true){
                      echo '<meta http-equiv="refresh" content="0; URL=?deleted"/>';
                  }else{
                      echo "Unable to Delete..";
                  }
              }
    
             
              ?>
    </div>
    </div>
-->
<!--
    </div>
    </div>
    </div>
    </div>
 
-->
    
<!--***** Footer *****--> 
<?php
  include('./adminMainInclude/footer.php');
?>
<!--***** End Footer *****-->             
     
      
      
        
         
          
           
            
             
              
               
                
                 
                  
                   
                    
                     
                      
                       
                         
   