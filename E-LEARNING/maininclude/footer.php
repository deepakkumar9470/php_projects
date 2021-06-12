<!--*********** Footer Section *************--> 
<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy;2020 || Designed by iCollege Team || 
    <a href="#" data-toggle="modal" data-target="#stuAdminModalCenter">Admin Login</a></small>
</footer>

<!--*********** End Footer Section *************--> 
         
<!--*********** Registration Form include here *************-->  
<?php
 include('registration.php');

?> 
<!--*********** End Registration Form include here *************-->                              
                                                                                             
          
<!--*********** Login Form include here *************-->  
<?php
 include('login.php');
?>                     
<!--*********** End  Login Form include here *************-->       
  
<!--*********** Admin Login Form include here *************-->                
<?php 
 include('adminlogin.php');
?>   
<!--*********** Admin Login Form include here *************-->   
    
    
     
       
    <script src="Js/jquery.js"></script>
    <script src="Js/popper.js"></script>
    <script src="Js/bootstrap.js"></script>
    <script src="Js/font-awesome-icons.js"></script>
    <script src="Js/owl-carousel.js"></script>
    
    <!-- Sweetalert -->
    <script src="Js/sweetalert.js"></script>
    
    <!-- Student/User Ajax Request -->
    <script src="Js/ajaxrequest.js"></script>
    
    <!-- Admin Ajax Request -->
    <script src="Js/ajaxadminrequest.js"></script>
    <script>
       $('#testimonial-slider').owlCarousel({
        autoplay:true,
        dots:false,
        nav:true,   
        loop:true,
        navText:['<i class="fa fa-angle-left"></i>' ,'<i class="fa fa-angle-right"></i>' ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
    }
})

    </script>
    
</body>
</html>

