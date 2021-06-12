 <!--*********** Registration Modal Section *************-->
 
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalLabel">SignUp Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" id="Regform">
             <div class="form-group">
                 <i class="fas fa-user"></i><label for="sturegname" class="pl-2 font-weight-bold">Name</label> <small id="statusMsg1"></small> <input type="text" class="form-control" name="sturegname" placeholder="Name" id="sturegname">
             </div>
              <div class="form-group">
                 <i class="fas fa-envelope"></i><label for="stueregmail" class="pl-2 font-weight-bold">Email</label><small id="statusMsg2"></small><input type="email" class="form-control" name="sturegemail" placeholder="Email" id="sturegemail">
             </div>
              <div class="form-group">
                 <i class="fas fa-key"></i><label for="sturegpass" class="pl-2 font-weight-bold">Password</label><small id="statusMsg3"></small><input type="password" class="form-control" name="sturegpass" placeholder="Email" id="sturegpass">
             </div>
         </form>
      </div>
      <div class="modal-footer">
       <span id="successMsg"></span>
        <button type="button" class="btn btn-primary" onclick="addBtn()" id="signUpButton">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
               
<!--*********** End Registration Modal Section *************-->  