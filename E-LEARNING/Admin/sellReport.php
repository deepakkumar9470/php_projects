
<!--***** Header *****--> 
<?php
    if(!isset($_SESSION)){
       session_start();
    }
     include('./adminMainInclude/header.php');
     include('../dbconnection.php');

    
    if(isset($_SESSION['is_adminlogin'])){
         $stuAdmin_Email = $_SESSION['stuadminEmail'];
          }else{
             echo header('location:../index.php');
         }
?>



<!--***** End Header *****-->    

<!--*******Main Content *******-->                         
<div class="col-sm-9 mt-5">
    <form action="" method="post" class="mt-3 form-inline d-print-none">
      <div class="form-row">
         <div class="form-group col-md-2">
          <label for="date"></label>
          <input type="date" class="form-control" id="startDate" name="startDate">
         </div>
          <div class="form-group col-md-2">
            <label for="date"></label>
            <input type="date" class="form-control" id="endDate" name="endDate">
          </div>
          <div class="form-group">
             <button type="submit" class="btn btn-secondary" value="Search" name="searchSubmit">Submit</button>
          </div>
        </div>
   </form>
    
    <?php
        if(isset($_REQUEST['searchSubmit'])){
           $startDate=$_REQUEST['startDate'];
           $endDate=$_REQUEST['endDate'];
            $sql = "SELECT * FROM course_order WHERE txn_date BETWEEN '$startDate' AND '$endDate'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
              echo '<table class="table">
                    <thead>
                    <tr>
                      <th scope="col">Order ID</th>
                      <th scope="col">Course ID</th>
                      <th scope="col">Student Email</th>
                      <th scope="col">Payment Status</th>
                      <th scope="col">Order Date</th>
                      <th scope="col">Amount</th>
                    </tr>
                    </thead>
                    <tbody>';
                 while ($row = mysqli_fetch_assoc($result)){
                     echo '<tr>
                          <td scope="row">'.$row['order_id'].'</td>
                          <td scope="row">'.$row['course_id'].'</td>
                          <td scope="row">'.$row['stu_email'].'</td>
                          <td scope="row">'.$row['status'].'</td>
                          <td scope="row">'.$row['txn_date'].'</td>
                          <td scope="row">'.$row['amount'].'</td>
                         </tr>';
                      }
                
                  echo '<tr>
                            <td>
                               <form class="d-print-none"> <input type="submit" class="btn btn-danger" value="Print" onclick="window.print();">
                               </form>
                            </td>
                        </tr>
                        </tbody>
                       </table>';
                } else{
                    echo '<div class="alert alert-warning" role="alert col-sm-6 ml-5 mt-2">No Records Found..</div>';
                  }
            }
              ?>      
        </div> 
</div>
</div>
</div>
</div>
    


<!--*******End Main Content *******--> 










<!--***** Footer *****--> 
<?php
  include('./adminMainInclude/footer.php');
?>
<!--***** End Footer *****--> 