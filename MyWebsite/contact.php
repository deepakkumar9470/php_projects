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
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
               <li class="nav-item active">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
            
        </div>
    </nav>
     
   
        
 
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
 
                

                                          
                                                             
                                                                            
                                                                                           
                                                                                                          
                                                                                                                         
                                                                                                                                        
                                                                                                                                                                      
<script src="Javascript/jquery.js"></script>     
<script src="Javascript/popper.js"></script>     
<script src="Javascript/bootstrap.js"></script>     
     

<script src="Javascript/icon.js"></script> 
<!--<script src="Javascript/materialize.js"></script>       -->
<script src="Javascript/font.js"></script>    
<script src="Javascript/sweet_alert.js"></script>    

</body>
</html>