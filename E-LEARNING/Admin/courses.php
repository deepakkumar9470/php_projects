
<!--***** Header *****--> 
<?php
  include('./adminMainInclude/header.php');

  include('../dbconnection.php');
?>
<!--***** End Header *****-->    







<!--*******Main Content *******--> 
<div class="col-sm-9 mt-5 py-3">
          <p class="bg-dark text-white p-2">List of Courses </p> 
            <?php 
               $sql = "SELECT * FROM course ";
               $result = mysqli_query($conn,$sql);
               //$row = mysqli_num_rows($result);
                if(mysqli_num_rows($result) > 0){
                ?>
            <table class="table">
               <thead>
                <tr>
                  <th scope="col">Course ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Author</th>
                  <th scope="col">Action</th>
                 </tr>
              </thead>
               <tbody>
               <?php while ($row = $result->fetch_assoc()){
                      echo '<tr>';
                      echo '<th scope="row">'.$row['course_id'].'</th>';
                      echo '<td>'.$row['course_name'].'</td>';
                      echo '<td>'.$row['course_author'].'</td>';
                      echo '<td>'; 
                      echo '
                         <form action="editCourse.php" method="post" class="d-inline">
                           <input type="hidden" name="id" value='.$row["course_id"].'>
                            <button class="btn btn-info mr-3" type="submit" name="editCourse" value="View">  <i class="fas fa-pen"></i></button>
                         </form>
                       <form action="" method="post" class="d-inline">
                         <input type="hidden" name="id" value='.$row["course_id"].'>
                         <button class="btn btn-dark mr-3" type="submit" name="delete"    value="Delete"><i class="far fa-trash-alt"></i></button>
                        </form> 
                            
                      </td>
                  </tr>';
               } ?>
             
              </tbody>
            </table>
            
            <?php } else {
                     echo '<div class="alert alert-danger" role="alert">
                           <h4 class="alert-heading">No Data Found</h4>
                          <p>No data founds in the database first add the course data..</p></div>';
                       } 
          
              //Delete Id by here
              
              if(isset($_REQUEST['delete'])){
                  $sql = "DELETE FROM course WHERE course_id = {$_REQUEST['id']}";
                  
                  if(mysqli_query($conn,$sql) == true){
                      echo '<meta http-equiv="refresh" content="0; URL=?deleted"/>';
                  }else{
                      echo "Unable to Delete..";
                  }
              }
    
             ?>
</div>
           
</div>






<!--******* Floating Add Course Button *******-->
<div>
    <a href="addCourse.php" class="btn btn-success box"><i class="fas fa-plus fa-2x"></i></a>
    
</div>
</div>
<!--</div>-->
<!--******* End Floating Add Course Button *******-->
<!--*******End Main Content *******--> 










<!--***** Footer *****--> 
<?php
  include('./adminMainInclude/footer.php');
?>
<!--***** End Footer *****--> 