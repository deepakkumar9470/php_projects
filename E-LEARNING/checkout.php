
<?php 
  // Database connection
   include_once('./dbconnection.php');
   session_start();


 if(!isset($_SESSION['is_login'])){
     echo header('location:loginorsignup.php');
  }else{
     header("Pragma: no-cache");
	 header("Cache-Control: no-cache");
	 header("Expires: 0");
      $stuLog_Email=$_SESSION['stulogin_email'];
     ?>
        <!doctype html>
        <html lang="en">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="GENERATOR" content="Evrsoft First Page">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="CSS/bootstrap.css">
            <link rel="stylesheet" href="CSS/font-awesome-icons.css">
            <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
            
            <!-- Custom CSS -->
            <link rel="stylesheet" href="CSS/main.css">
            <title>Checkout</title>
          </head>
          <body>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3  jumbotron">
                    <h5 class="mb-4 text-center">Welcome to iCollege Page</h5>
      <form method="post" action="./PaytmKit/pgRedirect.php">
            <div class="form-group row">
                <label for="ORDER_ID" class="col-sm-4 col-form-label">Order ID</label>
                <div class="col-sm-8">
                    <input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
				     value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="CUST_ID" class="col-sm-4 col-form-label">User Email</label>
                <div class="col-sm-8">
                    <input id="CUST_ID" tabindex="1" maxlength="20" size="20"
						name="CUST_ID" autocomplete="off"
				     value="<?php if(isset($stuLog_Email)){echo  $stuLog_Email;} ?>" readonly>
                </div>
           </div>
           
           <div class="form-group row">
                <label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
                <div class="col-sm-8">
					<input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php if(isset($_POST['id'])) {echo $_POST['id'];}?>" readonly>
                </div>
           </div>
           
           <div class="form-group row">
               <div class="col-sm-8">
                 <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly>
               </div>
           </div>
           
           <div class="form-group row">
               <div class="col-sm-8">
                   <input type="hidden"id="CHANNEL_ID" tabindex="4" maxlength="12"
				    size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
              
               </div>
           </div>
           <div class="text-center">
             <input value="CheckOut" class="btn btn-primary btn-sm" type="submit"	onclick="" >
             <a href="./course.php" class="btn btn-secondary btn-sm">Cancel</a>
           </div>
      </form>
             <small class="form-text text-muted">Note: Complete Payment by Clicking Checkout    Button</small>       
                   
             </div>
         </div>
        </div>


          </body>
        </html>
<?php         
 }
?>
























