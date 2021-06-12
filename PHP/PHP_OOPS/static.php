<?php 
//   echo "Welcome to PHP-Static:)";
//   echo "<br>";

  /* Eg:1 class Student{
     public static function staticMethod1(){
          echo "I am a Static Method 1 <br>";
      }
       public static function staticMethod2(){
          echo "I am a Static Method 2";
      }
  }
//$stu= new Student();
echo Student::staticMethod1();
echo Student::staticMethod2(); */

/* Eg:2 class Place{
    public static function place(){
        echo "Ranchi is the capital of Jharkhand:)";
    }

    public function __construct(){
        self::place();
    }
}

$plc= new place(); */

/* E.g:3 class Method{
    public static $pi = 3.147;
}
echo Method::$pi; // Get the static property */


/* E.g: 3class Method{
    public static $pi= 6.147;
    public  function staticMethod(){
        return self::$pi;
    }
}

$mt= new Method();
echo $mt->staticMethod();*/

?>