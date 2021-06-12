
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
          <p class="bg-dark text-white p-2">List of Feedbacks </p> 
            <?php 
               $sql = "SELECT * FROM feedback ";
               $result = mysqli_query($conn,$sql);
               //$row = mysqli_num_rows($result);
                if(mysqli_num_rows($result) > 0){
                    echo 
                     '<table class="table">
                       <thead>
                        <tr>
                          <th scope="col">Course ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Author</th>
                          <th scope="col">Action</th>
                         </tr>
                      </thead>
                       <tbody>';
                   while ($row = mysqli_fetch_assoc($result)){
                      echo '<tr>';
                      echo '<th scope="row">'.$row['f_id'].'</th>';
                      echo '<td>'.$row['f_content'].'</td>';
                      echo '<td>'.$row['stu_id'].'</td>';
                      echo '<td>'; 
                      echo 
                           '<form action="" method="post" class="d-inline">
                             <input type="hidden" name="id" value='.$row["f_id"].'>
                             <button class="btn btn-dark mr-3" type="submit" name="delete"    value="Delete"><i class="far fa-trash-alt"></i></button>
                            </form> 
                        </td>
                     </tr>';
                   }
                echo '</tbody>
                      </table>';
                }
                else{
                     echo '0 Result Found';
                    }
               
              // Delete Id by here
              
              if(isset($_REQUEST['delete'])){
                  $sql = "DELETE FROM feedback WHERE f_id = {$_REQUEST['id']}";
                  
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

<!--*******End Main Content *******--> 










<!--***** Footer *****--> 
<?php
  include('./adminMainInclude/footer.php');
?>
<!--***** End Footer *****--> 