<!--*********** Login Modal Section *************-->
 
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" id="loginform">
              <div class="form-group">
                 <i class="fas fa-envelope"></i><label for="stuloginemail" class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control" name="stuloginemail" placeholder="Email" id="stuloginemail">
             </div>
              <div class="form-group">
                 <i class="fas fa-key"></i><label for="stuloginpass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" name="stuloginpass" placeholder="Email" id="stuloginpass">
             </div>
         </form>
      </div>
      <div class="modal-footer">
       <small class="statusLogMsg"></small>
        <button type="button" onclick="checkstatusLogin()" class="btn btn-primary" data-dismiss="modal" id="loginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div> 
               
<!--*********** End Login Modal Section *************--> 