<!--*********** Navigation Include Here (Header) *************-->
 <?php

   include('./dbconnection.php');
   include('./maininclude/navigation.php');
  ?>
<!--*********** Navigation Include Here(Header)*************--> 
      
      
      
<!--*********** Video Section *************--> 

 <div class="container-fluid remove-vid-marg">
       <div class="video-parent">
           <video playsinline autoplay muted loop>
               <source src="videos/work.mp4">
           </video>
           <div class="vid-overlay"></div>
       </div>
       
       <div class="vid-content">
           <h1 class="my-content">Welcome to iCollege</h1>
           <small class="my-small">Learn Best Courses</small><br>
           <!-- Button Session checking -->
            <?php
              if(!isset($_SESSION['is_login'])){
                  echo '<a href="#stuRegModalCenter" class="btn btn-primary mt-3" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
              }else{
                  echo '<a href="Student/studentProfile.php" class="btn btn-success mt-3">My Profile</a>';
              }
             ?>
             <!-- End Button Session checking -->
       </div>
       
   </div>  
    
<!--*********** End Video Section *************-->    
   
     
    
<!--*********** Text Banner Section *************-->  
   
  <div class="container-fluid bg-info txt-banner">
       <div class="row bottom-banner">
           <div class="col-sm">
               <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
           </div>
           <div class="col-sm">
               <h5><i class="fas fa-users mr-3"></i>Expert Course Instructors</h5>
           </div>
           <div class="col-sm">
               <h5><i class="fas fa-keyboard mr-3"></i>Life Time Access</h5>
           </div>
           <div class="col-sm">
               <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guaranteed</h5>
           </div>
           
       </div>
   </div>
   
<!--*********** End Text Banner Section *************-->     
    
    
<!--*********** Popular Courses Section *************-->
 
<div class="container mt-5">
      <h1 class="text-center">Popular Courses</h1>
      <div class="card-deck mt-4">
        <?php
           $sql = "SELECT * FROM course LIMIT 3";
           $result = mysqli_query($conn, $sql);
           if(mysqli_num_rows($result) > 0){
               while($row = mysqli_fetch_assoc($result)){
                   $course_id=$row['course_id'];
                   echo ' <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align:left;padding:0px;margin:0px">
                <div class="card" style=" width: 100%; max-height:500px;">
             <img class="card-img-top" src="'.str_replace('..', '.',$row['course_image']).'" alt="Course Image" style=" width: 100%; max-height:auto;">
                  <div class="card-body">
                      <h5 class="card-title">'.$row['course_name'].'</h5>
                      <p class="card-text">'.$row['course_desc'].'</p>
                  </div>
                  <div class="card-footer">
                      <p class="card-text d-inline">Price:<small><del>&#8377 '.$row['course_original_price'].'</del></small><span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
                      <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                  </div>
             </div>
             </a>';
                }
             }
          
          ?>
   </div>
   
      <div class="card-deck mt-4">
         <?php
           $sql = "SELECT * FROM course LIMIT 3,3";
           $result = mysqli_query($conn, $sql);
           if(mysqli_num_rows($result) > 0){
               while($row = mysqli_fetch_assoc($result)){
                   $course_id=$row['course_id'];
                   echo ' <a href="coursedetails.php?course_id='.$course_id.'" class="btn"   style="text-align:left;padding:0px;margin:0px">
                    <div class="card">
                      <img class="card-img-top" src="'.str_replace('..', '.',$row['course_image']).'" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">'.$row['course_name'].'</h5>
                          <p class="card-text">'.$row['course_desc'].'</p>
                      </div>
                      <div class="card-footer">
                          <p class="card-text d-inline">Price:<small><del>&#8377 '.$row['course_original_price'].'</del></small><span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
                          <a href="coursedetails.php?course_id='.$course_id.'"  class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                      </div>
             </div>
             </a>';
                }
             }
          
          ?>
      </div>
      
      <div class="text-center m-2">
         <a href="course.php" class="btn btn-danger btn-sm">View all course</a>
     </div>
</div>
  
<!--*********** End Popular Courses Section *************-->   
 
    
 <!--*********** Contact Include Here  *************-->
 <?php
   include('./contact.php');
  ?>
<!--*********** Contact Include Here(Header)*************--> 
      
     
             

      
<!--*********** Testimonial Feedback Section *************-->  
<div class="testimonial-area">
 <div class="container" id="feedback">
          <div class="row">
             <div class="col-md-12">
                 <div class="owl-carousel test-slides" id="testimonial-slider">
                     <div class="testimonial-item">
                         <div class="single-testimonial">
                             <?php
                              $sql = "SELECT l.stu_name, l.stu_occ, l.stu_image ,f.f_content FROM lms AS l JOIN feedback AS f ON l.stu_id=f.stu_id";
                               $result = mysqli_query($conn, $sql);
                               if(mysqli_num_rows($result) > 0){
                                 while($row = mysqli_fetch_assoc($result)){
                                 $stu_img=$row['stu_image'];
                                 $new_image=str_replace('..','.',$stu_img);     
                              ?>
                             
                             <div class="test-pic">
                              <img src="<?php echo $new_image ?>" alt="Profile Image">
                             </div>
                             <div class="testimonial-prof">
                                 <h4> <?php echo $row['stu_name']; ?> <span><?php echo $row['stu_occ']; ?></span></h4>
                                 <p class="p-description"><?php echo $row['f_content']; ?> </p>
                             </div>
                             <?php 
                                 }
                              }
                             ?>
                         </div>
                     </div>
                     
                     
                    
                 </div>
             </div>
         </div>
         
  </div>                      
  </div> 


<!--*********** End Testimonial Feedback Section *************-->                 
  
       
                 
<!--*********** Social Section *************--> 

<div class="container-fluid bg-info">
       <div class="row text-white text-center p-2">
           <div class="col-sm">
               <a  href="#" class="text-white social-hover"><i class="fab fa-facebook-f mr-2"></i>Facebook</a>
           </div>
           <div class="col-sm">
               <a  href="#" class="text-white social-hover"><i class="fab fa-instagram mr-2"></i>Instagram</a>
           </div>
          <div class="col-sm">
               <a  href="#" class="text-white social-hover"><i class="fab fa-twitter mr-2"></i>Twitter</a>
           </div>
           <div class="col-sm">
               <a  href="#" class="text-white social-hover"><i class="fab fa-github"></i>Github</a>
           </div>
           <div class="col-sm">
               <a  href="#" class="text-white social-hover"><i class="fab fa-linkedin-in mr-2"></i>Linkedin</a>
           </div>
           
       </div>
   </div>

<!--*********** End Social Section *************--> 

               
<!--*********** About Section *************-->                 
<div class="container-fluid bg-light"> 
      <div class="container">
          <div class="row text-center">
              <div class="col-sm">
                  <h5>About Us</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque provident unde eaque.</p>
              </div>
              <div class="col-sm">
                  <h5>Catogory</h5>
                  <a href="#" class="text-dark">Android Development</a>
                  <a href="#" class="text-dark">Web Development</a>
                  <a href="#" class="text-dark">Python Development</a>
                  <a href="#" class="text-dark">Full Stack Development</a>
                  <a href="#" class="text-dark">MERN Stack Development</a>
              </div>
              <div class="col-sm">
                  <h5>Contact Us</h5>
                  <p>iCollege <br>BTM 1st Stage <br>Banglore <br>PH:+91-90000000000</p>
              </div>
          </div>
      </div>  
</div>               
<!--*********** End About Section *************-->


<!--*********** Footer Include Here (Footer) *************-->        
 <?php
   include('./maininclude/footer.php');
  ?>                         
<!--*********** Footer Include Here (Footer) *************-->

































