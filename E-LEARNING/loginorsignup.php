<!--***** Header *****-->
<?php
 if(!isset($_SESSION)){
     session_start();
 }
   include_once('./dbconnection.php');
   include('./maininclude/navigation.php');



 /*if(isset($_SESSION['is_login'])){
     $stuLog_Email=$_SESSION['stulogin_email'];
  } else{
     echo header('location:index.php');
  }*/
   

?>

<!--***** End Header *****-->

<!--*********** Course Page Banner *************--> 

  <div class="container-fluid bg-dark">
      <div class="row">
          <img src="Images/regpage.jpg" alt="courser" style="height:300px; width:100%; object-fit:cover;
          box-shadow:10px;">
      </div>
  </div>

<!--*********** End Course Page Banner *************--> 


<!--*******Main Content *******--> 

 <div class="container  jumbotron mt-5 px-3">
     
     <div class="row">
         <div class="col-md-4">
             <h5 class="mb-3">If Already Registered</h5>
             <form role="form" id="loginform">
               <div class="form-group">
                 <i class="fas fa-user"></i><label for="stuloginemail" class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control" name="stuloginemail" placeholder="Email" id="stuloginemail">
             </div>
              <div class="form-group">
                 <i class="fas fa-unlock-alt"></i><label for="stuloginpass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" name="stuloginpass" placeholder="Email" id="stuloginpass">
             </div>
                   <button type="button" onclick="checkstatusLogin()" class="btn btn-primary"  id="loginBtn">Login</button>
                 
             </form><br/>
             
              <small id="stulogimMsg"></small> 
         </div>
             
             <div class="col-md-6 offset-md-1">
                 <h5 class="mb-3">New User || SignUp</h5>
               <form role="form" id="Regform">
                 <div class="form-group">
                     <i class="fas fa-user"></i><label for="sturegname" class="pl-2 font-weight-bold">Name</label> <small id="statusMsg1"></small> <input type="text" class="form-control" name="sturegname" placeholder="Name" id="sturegname">
                 </div>
                  <div class="form-group">
                     <i class="fas fa-envelope"></i><label for="stueregmail" class="pl-2 font-weight-bold">Email</label><small id="statusMsg2"></small><input type="email" class="form-control" name="sturegemail" placeholder="Email" id="sturegemail">
                 </div>
                  <div class="form-group">
                     <i class="fas fa-key"></i><label for="sturegpass" class="pl-2 font-weight-bold">New Password</label><small id="statusMsg3"></small><input type="password" class="form-control" name="sturegpass" placeholder="Email" id="sturegpass">
                 </div>
                 <button type="button" class="btn btn-primary" onclick="addBtn()" id="signUpButton">Sign Up</button>
             </form><br/>
               <small id="successregimMsg"></small>
             </div>        
             
            
    
         </div>
     </div>
<hr/>

<!--
</div>
</div>
-->

<!--*******End Main Content *******--> 



<!--***** Contact *****-->
<?php
   include('contact.php');
?>
<!--***** End Contact *****-->




<!--***** Footer *****-->
<?php
   include('./maininclude/footer.php');
?>
<!--***** End Footer *****-->