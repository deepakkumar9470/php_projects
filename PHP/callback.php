<?php

// echo "Welcome to PHP-Callback Function:)";
// echo "<br>";

 /* Call function using call_user_func()
 function myfun(){
     echo "My Self Deepak Kumar Chouhan\n";
 }
  call_user_func('myfun');*/

/* Pass a Callback to PHP array_map()
function myfun($item){
    return strlen($item);
}
$mystr=["apple", "orange", "banana", "coconut"];
$lengths= array_map('myfun',$mystr);
print_r($lengths);*/

/* Use an anonymous function as a callback for PHP's array_map()
$mystr=["apple", "orange", "banana", "coconut","mango"];
$lengths= array_map(function($item){
   return strlen($item); 
}, $mystr);

print_r($lengths);*/

/* Run a callback from a user-defined function 


function fun1($str){
    return $str .'!';
}
function fun2($str){
    return $str .'....';
}


function formatted($str , $format){
    echo $format($str);
}

formatted('Hello', 'fun1');
formatted('Deepak Kumar', 'fun2');*/


?>