<?php
//echo "Welcome to PHP Cookies :)";
//echo "<br>";
//
//
//// setcookie(name, value, expire, path, domain, secure, httponly);
//
// $cookie_name = "userdeepak";
// $cookie_value = "Suraj Kumar Chouhan";
// setcookie($cookie_name , $cookie_value, time() + (86400 *30) , "/");
//  setcookie('userdeepak' , "", time() - 225);
?>


<!--
<html>
    <body>
        <?php
        
         if (!isset($_COOKIE[$cookie_name])) {
             echo "Cookie " .$cookie_name. " is n'tset";
             if($_COOKIE > 0){
                 echo "Cookie are enabled <br>";
             }else{
                    echo "Cookie are disabled";
             }
         }else{
             echo "Cookie " .$cookie_name. " is set <br>";
             echo "Cookie value is: " .$_COOKIE[$cookie_name];
         }
        
        ?>
    </body>
</html>-->
