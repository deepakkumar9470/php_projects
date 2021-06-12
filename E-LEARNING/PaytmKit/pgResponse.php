<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// database connection

 include('../dbconnection.php');
   session_start();



// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
         echo "<b>Transaction status is success</b>" . "<br/>";
//        echo 'swal("Transaction Successful","success", {
//              button: "Ok",})';  
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
        
        if(isset($_POST['ORDERID']) && isset($_POST['TXNAMOUNT'])){
            $Order_id =$_POST['ORDERID'];
            
            if(isset($_SESSION['stulogin_email']) || isset($_SESSION['course_id'])){
            $stuLog_Email=$_SESSION['stulogin_email'];
            $course_id=$_SESSION['course_id'];
                }
            $status=$_POST['STATUS'];
            $res_msg=$_POST['RESPMSG'];
            $amount=$_POST['TXNAMOUNT'];
            $txd_date=$_POST['TXNDATE'];  
            
      
          $sql = "INSERT INTO course_order(order_id, stu_email, course_id, status,respmsg,amount,  txn_date) VALUES ('$Order_id','$stuLog_Email','$course_id','$status','$res_msg','$amount','$txd_date')";
             if(mysqli_query($conn, $sql) == true){
                echo "('Redirecting to My Profile....')";
                 echo "<script> setTimeout(()=>{
                       window.location.href='../Student/myCourse.php';
                     },1500);</script>";
                };
            
            
                
                
         }
        
        
        
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
//		foreach($_POST as $paramName => $paramValue) {
//				echo "<br/>" . $paramName . " = " . $paramValue;
//		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>