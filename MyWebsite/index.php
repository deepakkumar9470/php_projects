<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
     
     
     <link rel="stylesheet" href="CSS/style.css" type="text/css">
     <link rel="stylesheet" href="CSS/bootstrap.css">
     <link rel="stylesheet" href="CSS/fonts.css">
     <link rel="stylesheet" href="CSS/icon.css">
     
    <!-- Pop up -->



</head>
<body>
   <!-- Navigation Bar -->
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 fixed-top">
        <img src="Images/dk_logo.png" alt="Head logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
               <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
            
        </div>
    </nav>
     
    
    <!-- Carousel -->
    
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="Images/carousel1.jpg" alt="Los Angeles" width="1100" height="500">
              <div class="carousel-caption">
                  <h3>Web Development</h3>
                  <p>We create Responsive Websites</p>
              </div>
          </div>
      <div class="carousel-item">
          <img src="Images/carousel2.jpg" alt="Chicago" width="1100" height="500">
          <div class="carousel-caption">
              <h3>Freelancing</h3>
              <p>Contact for freelancer job</p>
          </div>
      </div>
      <div class="carousel-item">
          <img src="Images/web_design.jpg" alt="New York" width="1100" height="500">
          <div class="carousel-caption">
              <h3>Easy and Fast Web environment</h3>
              <p>Runs on every Platform</p>
          </div>
      </div>
  </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
  </a>
   </div>
     
     
     
   <!-- About Section -->
    
    <section class="my-5">
        <div class="about-div py-5">
            <h2 class="text-center">About Us</h2><hr/>
            
        </div>
        <div class="container-fluid">
           <div class="row">
               <div class="col-lg-6 col-md-6 col-12">
                   <img src="Images/DEEPAK%20NEW.jpg" class="img-fluid about-image py-2">
               </div>
               <div class="col-lg-6 col-md-6 col-12">
                   <h2 class="display-4 deepak"> Deepak Kumar Chouhan</h2>
                   <p class="py-3">I have done B.Tech in 2019 from University College of Engineering & Technology,VBU University. I possess Web bDevelopment, ReactJS, Python & Django skills.</p>
                   <a href="about.php" class="btn btn-secondary">About Me</a>
               </div>
           </div>
            
        </div>
        
    </section>
     
    <!-- Card Section -->
    
     <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">My Friends</h2><hr/>
        </div>
        <div class="container-fluid">
           <div class="row">
               <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                <img class="card-img-top img-rounded rounded-circle img-fluid" src="Images/DEEPAK%20NEW.jpg" alt="Card image cap">
                       <div class="card-body">
                           <h5 class="card-title text-center">Deepak Kumar Chouhan</h5>
                           <p class="card-text">My Self Deepak Kumar Chouhan.I have done B.Tech with CSE branch from UCET,VBU University.</p>
<!--                           <a href="#" class="btn btn-primary">Check Me</a>-->
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                   <div class="card">
                       <img class="card-img-top rounded-circle img-fluid" src="Images/abhinav.PNG" alt="Card image cap">
                       <div class="card-body">
                           <h5 class="card-title text-center">Abhinav Kumar</h5>
                           <p class="card-text">My Self Abhinav Kumar.I have done B.Tech with IT branch from UCET,VBU University.</p>
                           
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                   <div class="card">
                       <img class="card-img-top rounded-circle img-fluid" src="Images/anuj.PNG" alt="Card image cap">
                       <div class="card-body">
                           <h5 class="card-title text-center">Anuj Kumar</h5>
                           <p class="card-text">My Self Anuj Kumar.I have done B.Tech with IT branch from UCET,VBU University.</p>
                           
                       </div>
                   </div>
               </div>
              
           </div>
            
        </div>
        
    </section> 
     
  
     
     
     <!-- Images Gallery Section --> 
   <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Memorable Images</h2><hr/>
        </div>
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                  <img src="Images/tech1.jpg" class="img-fluid pb-4">
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                  <img src="Images/tech2.jpg" class="img-fluid pb-4">
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                  <img src="Images/tech3.jpg" class="img-fluid pb-4">
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                  <img src="Images/tech4.jpg" class="img-fluid pb-4">
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                  <img src="Images/tech5.jpg" class="img-fluid pb-4">
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                  <img src="Images/tech6.jpg" class="img-fluid pb-4">
              </div>
            </div>
        </div>
  </section>        
 
    <!-- Form Section -->
      
   <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact Us</h2><hr/>
        </div>
        
        <div class="w-50 m-auto" id="contact">
              
                <form action="userinfo.php" method="post">
                   <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Email Id</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Mobile No</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Comments</label>
                         <textarea class="form-control" name="comments"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-block" id="mybtn">Submit</button>
                </form>
        
        </div>
           
        
    </section>
       
      <!-- Footer Section-->
      <footer>
<!--
          <div class="container ml-auto">
               <button class="btn btn-warning ml-auto"> <i class="fas fa-arrow-up"></i>Top</button>
          </div>
-->
          <p class="p-3 bg-dark text-white text-center">Copyright@2020 || All right Reserved</p>
          
      </footer>    
 
                
<!--
  <div class="container-fluid">

      <div class="card" style="max-width: 202px;">
          <img class="card-img-top" src="Images/tech6.jpg" alt="Photo of sunset">
          <div class="card-body">
              <p class="card-text">Well it was good while it lasted...</p>
          </div>

      </div>

  </div>                          
      
-->
                                          
                                                             
                                                                            
                                                                                           
                                                                                                          
                                                                                                                         
                                                                                                                                        
                                                                                                                                                                      
<script src="Javascript/jquery.js"></script>     
<script src="Javascript/popper.js"></script>     
<script src="Javascript/bootstrap.js"></script>     
     

<script src="Javascript/icon.js"></script> 
<!--<script src="Javascript/materialize.js"></script>       -->
<script src="Javascript/font.js"></script>    
<script src="Javascript/sweet_alert.js"></script>    

</body>
</html>