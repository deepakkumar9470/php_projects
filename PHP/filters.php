<!--
<table>
    <tr>
        <td>FilterName</td>
        <td>Filter ID</td>
    </tr>
    
    <?php
    
     foreach( filter_list()  as $id => $filter){
         echo '<tr><td>'.$filter. '</td><td>'.filter_id($filter),'</td><td>';
     }
    
    ?>
</table>-->
<?php
//echo "Welcome to PHP-Filters:)";
//echo "<br>";

// Sanitize a String
//$mystr= "Deepak Kumar Chouhan !";
//$filter = filter_var($mystr , FILTER_SANITIZE_STRING);
//echo $filter;
//
// Validate integer
//
//$myint= 20;
//if(! filter_var($myint, FILTER_VALIDATE_INT) === false) {
//    echo "Integer is Valid";
//}else{
// echo "Integer isn't Valid";   
//}
//
//
// Validate IP address
//$ip = "127.0.0.1";
//
//if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
//  echo("$ip is a valid IP address");
//} else {
//  echo("$ip is not a valid IP address");
//}
//
// Sanitize and Validate a Email address
//
//$email = "dk397787@gmail.com";
//$email = filter_var($email, FILTER_SANITIZE_EMAIL);
//if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//  echo("$email is a valid email address");
//} else {
//  echo("$email is not a valid email address");
//}
//
// Sanitize and Validate URL
//
//$myurl = "https://www.w3schools.com";
//$myurl = filter_var($myurl, FILTER_SANITIZE_URL);
//    
//if (!filter_var($myurl, FILTER_VALIDATE_URL) === false){
//    echo("$myurl is a valid URL");
//}else{
//    echo("$myurl is a n't valid URL");
//}    

// Validate an Integer within a range
 
 /*$int = 12;
 $min = 1;
 $max = 100; 

if (filter_var($int, FILTER_VALIDATE_INT ,array('options' =>array('min range' =>$min, 'max-range'=>$max))) === false){
echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");
}*/

// Remove Characters With ASCII Value > 127

 /*$str = "Deepak KumarÆØÅ!";
 $mystr = filter_var($str, FILTER_SANITIZE_STRING , FILTER_FLAG_STRIP_HIGH);
 echo $mystr;*/
?>