// Ajax call form already exists email verification
 $(document).ready(function(){
    
     $('#sturegemail').on('blur',function(){
         var regx = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/i;
         var stuverEmail = $('#sturegemail').val();
         $.ajax({
            url:'Student/addstudent.php',
            method: 'POST',
            data: {
                stuEmail: stuverEmail,
            },
            success:function(data){
                
                if(data !=0){
                  $('#statusMsg2').html('<small  style="color:red">Email ID already exists.</small>');
                  $('#signUpButton').attr('disabled', true);
                }else if(data == 0 && regx.test(stuverEmail)){
                    $('#statusMsg2').html('<small  style="color:green">Good You may proceed.</small>');
                  $('#signUpButton').attr('disabled', false);
                }else if(!regx.test(stuverEmail)){
                    $('#statusMsg2').html('<small  style="color:red">Please enter a valid email address i.e.example@gmail.com</small>');
                  $('#signUpButton').attr('disabled', false);
                }
               
            },
         }); 
            
     });
      
     
 });







// Capturing Data her and send to php server
function addBtn(){
    var regx = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/i;
    var stuname = $('#sturegname').val();
    var stuemail = $('#sturegemail').val();
    var stupass = $('#sturegpass').val();
    
    // Checking form fields empty when submitting
      if (stuname.trim() == ""){
          $('#statusMsg1').html('<small  style="color:red">Please Enter Your Name..</small>');
          $('#sturegname').focus();
          return false;
      } else if (stuemail.trim() == ""){
          $('#statusMsg2').html('<small  style="color:red">Please Enter Your Email.</small>');
          $('#sturegemail').focus();
          return false;
      } else if(stuemail.trim() != "" && !regx.test(stuemail)){
          $('#statusMsg2').html('<small  style="color:red">Please enter a valid email address i.e.example@gmail.com ..</small>');
          $('#sturegemail').focus();
          return false;
      }else if (stupass.trim() == ""){
          $('#statusMsg3').html('<small  style="color:red">Please Enter Your Password..</small>');
          $('#sturegpass').focus();
          return false;
      }else{
         $.ajax({
            url:'Student/addstudent.php',
            method: 'POST',
            dataType:'json',
            data: {
                stuName: stuname,
                stuEmal: stuemail,
                stuPass: stupass,
            },
            success:function(data){
//                console.log(data);
                if(data == 'OK'){
                    $('#successMsg').html('<span class="alert alert-success" role="alert">Registration Successfully</span>');
                    clearFields();
                }else if(data == 'Failed'){
                     $('#successMsg').html('<span class="alert alert-danger" role="alert">OOPS! Unable to  Register..</span>'); 
                }
               }
             }); 
         }
       
}



// Clear fields function
function clearFields(){
   $('#Regform').trigger('reset');
    $('#statusMsg1').html(' ');
    $('#statusMsg2').html(' ')
    $('#statusMsg3').html(' ');
}


// Ajax call for Student Login form verification
// header("Location: http://www.geeksforgeeks.org");

function checkstatusLogin(){
    var stulogEmail= $('#stuloginemail').val();
    var stulogPass= $('#stuloginpass').val();
     $.ajax({
            url:'Student/addstudent.php',
            method: 'POST',
            data: {
                stulogEmail: stulogEmail,
                stulogPass: stulogPass,
               },
            success:function(data){
                console.log(data);
                if(data == 0){
                    $('#statusLogMsg').html(
                    '<small class="alert alert-danger">Invalid Email or Password</small>'); 
                    
                    } else if(data == 1){
                     $('#statusLogMsg').html(
                      '<div class="spinner-border text-warning" role="status"></div>'); 
                      setTimeout(()=>{
                       window.location.href = 'index.php';
                      },1000);
                    }
                
               }
             }); 
}
       



// Contact Main Screen

function submit(){
    var regx = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/i;
    var stuname = $('#sturegname').val();
    var stuemail = $('#sturegemail').val();
    var stupass = $('#sturegpass').val();
    
    // Checking form fields empty when submitting
      if (stuname.trim() == ""){
          $('#statusMsg1').html('<small  style="color:red">Please Enter Your Name..</small>');
          $('#sturegname').focus();
          return false;
      } else if (stuemail.trim() == ""){
          $('#statusMsg2').html('<small  style="color:red">Please Enter Your Email.</small>');
          $('#sturegemail').focus();
          return false;
      } else if(stuemail.trim() != "" && !regx.test(stuemail)){
          $('#statusMsg2').html('<small  style="color:red">Please enter a valid email address i.e.example@gmail.com ..</small>');
          $('#sturegemail').focus();
          return false;
      }else if (stupass.trim() == ""){
          $('#statusMsg3').html('<small  style="color:red">Please Enter Your Password..</small>');
          $('#sturegpass').focus();
          return false;
      }else{
         $.ajax({
            url:'Student/addstudent.php',
            dataType:'json',
            method: 'POST',
            data: {
                stuName: stuname,
                stuEmal: stuemail,
                stuPass: stupass,
            },
            success:function(data){
                console.log(data);
                if(data == 'OK'){
                    $('#successMsg').html('<span class="alert alert-success" role="alert">Registration Successfully</span>');
                    clearFields();
                }else if(data == 'Failed'){
                     $('#successMsg').html('<span class="alert alert-danger" role="alert">OOPS! Unable to  Register</span>'); 
                }
               }
             }); 
         }
       
}















