
<!--***** Header *****--> 
<?php
    if(!isset($_SESSION)){
       session_start();
    }
  include('./adminMainInclude/header.php');

  include('../dbconnection.php');
?>
<!--***** End Header *****-->    







<!--*******Main Content *******--> 

           
                  
                         
<div class="col-sm-9 mt-5 mx-5">
    <form action="" method="post" class="mt-3 form-inline d-print-none">
        <div class="form-group mr-3 mt-5">
            <label for="ckeckid">Enter Course ID:</label>
            <input type="text" class="form-control ml-3" name="ckeckid" id="ckeckid">
        </div>
        <button type="submit" class="btn btn-success mt-5">Search</button>
    </form>
    
    <?php
        $sql = "SELECT course_id FROM course";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            if(isset($_REQUEST['ckeckid']) && $_REQUEST['ckeckid'] == $row['course_id']){
                $sql = "SELECT * FROM course WHERE course_id={$_REQUEST['ckeckid']}";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if($row['course_id'] && $_REQUEST['ckeckid']){
                    $_SESSION['course_id'] = $row['course_id'];
                    $_SESSION['course_name'] = $row['course_name'];
                    ?>
                <h4 class="mt-4 bg-dark text-white p-2">Course ID:<?php if(isset($row['course_id'])) {echo $row['course_id'];} ?> Course Name:<?php if(isset($row['course_name'])) 
                {echo $row['course_name'];} ?></h4>    
                    
             <?php 
                $sql = "SELECT * FROM lesson WHERE course_id={$_REQUEST['ckeckid']}";
                $result = mysqli_query($conn, $sql);  
                 echo '<table class="table">
                       <thead>
                        <tr>
                          <th scope="col">Lesson ID</th>
                          <th scope="col">Lesson Name</th>
                          <th scope="col">Lesson Link</th>
                          <th scope="col">Action</th>
                         </tr>
                      </thead>
                      <tbody>';
                     while ($row = mysqli_fetch_assoc($result)){
                      echo '<tr>';
                      echo '<th scope="row">'.$row['lesson_id'].'</th>';
                      echo '<td>'.$row['lesson_name'].'</td>';
                      echo '<td>'.$row['lesson_link'].'</td>';
                      echo '<td> 
                        <form action="editLesson.php" method="post" class="d-inline">
                           <input type="hidden" name="id" value='.$row["lesson_id"].'>
                            <button class="btn btn-info mr-3" type="submit" name="editLesson" value="View">  <i class="fas fa-pen"></i></button>
                        </form>
                        <form action="" method="post" class="d-inline">
                         <input type="hidden" name="id" value='.$row["lesson_id"].'>
                         <button class="btn btn-dark mr-3" type="submit" name="deleteme"    value="Delete"><i class="far fa-trash-alt"></i></button>
                        </form> 
                         </td>
                     </tr>';
                      }
                  
                echo ' </tbody>
                       </table>';    
                }else{
                    echo '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
                           Course Not Found..
                          </div>';
                    }
                //Delete Id by here
              
                  if(isset($_REQUEST['deleteme'])){
                      $sql = "DELETE FROM lesson WHERE lesson_id = {$_REQUEST['id']}";

                      if(mysqli_query($conn,$sql) == true){
                          echo '<meta http-equiv="refresh" content="0; URL=?deleted"/>';
                      }else{
                          echo "Unable to Delete..";
                      }
                  }
            }
        }

       ?>
</div> 








<?php
 if(isset($_SESSION['course_id'])){
   // Floating Add Lesson Button 
    echo 
      '<div>
       <a href="./addLessons.php" class="btn btn-success box"><i class="fas fa-plus fa-2x"></i></a></div>';
 
 }
?>                                                                            
</div>





 
<!--</div>-->
<!--</div>-->

<!--*******End Main Content *******--> 










<!--***** Footer *****--> 
<?php
  include('./adminMainInclude/footer.php');
?>
<!--***** End Footer *****--> 