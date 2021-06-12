/***** Ajax call for Admin Login form verification *****/


function checkadminLogin(){
    var stuadminEmail= $('#adminlogemail').val();
    var stuadminPass= $('#adminlogpass').val();
     $.ajax({
            url:'Admin/admin.php',
            method: 'POST',
            data: {
                stuadminEmail: stuadminEmail,
                stuadminPass: stuadminPass,
               },
            success:function(data){
                console.log(data);
                if(data == 0){
                    $('#adminstatusLogMsg').html(
                    '<small class="alert alert-danger">Invalid Email or Password</small>'); 
                    
                    } else if(data == 1){
                     $('#adminstatusLogMsg').html(
                      '<small class="alert alert-success">Success Loading..</small>'); 
                      setTimeout(()=>{
                       window.location.href = "./Admin/adminDashboard.php";
                      },1000);
                    }
                
               },
             }); 
}