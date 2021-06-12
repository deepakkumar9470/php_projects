<!--*********** Admin Modal Section *************-->
 
<div class="modal fade" id="stuAdminModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuAdminModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuAdminModalLabel">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" id="adminloginform">
              
             <div class="form-group">
                 <i class="fas fa-envelope"></i><label for="adminlogemail" class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control" name="adminlogemail" placeholder="Email" id="adminlogemail">
             </div>
              <div class="form-group">
                 <i class="fas fa-key"></i><label for="adminlogpass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" name="adminlogpass" placeholder="Email" id="adminlogpass">
             </div>
         </form>
      </div>
      <div class="modal-footer">
       <small class="adminstatusLogMsg"></small>
        <button type="button" class="btn btn-primary" onclick="checkadminLogin()" data-dismiss="modal" id="adminloginBtn">Admin Login</button>
        <button type="button" class="btn btn-secondary">Cancel</button>
      </div>
    </div>
  </div>
</div> 
               
<!--*********** End Admin Modal Section *************--> 