<!DOCTYPE html>
<!--
<html>
    <body>
        <?php
            $nameerr= $emailerr='';
            $name=$email='';
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $name = $_POST['name'];
                $email = $_POST['email'];
            }
         if (empty($name)) {
            $nameerr = "Name is required";
          } else {
            $name = test_input($name);
          }

          if (empty($email)) {
            $emailerr = "Email is required";
          } else {
            $email = test_input($email);
          }
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            Name:
            <input type="text" name="name"><br><br>
            <span class="error">* <?php echo $nameerr;?></span>
            Email:
            <input type="text" name="email"><br><br>
            <span class="error">* <?php echo $emailerr;?></span>
            <input type="submit" name="submit"><br><br>
        </form>
        
        <?php
          
              echo $name;
              echo "<br>";
              echo $email;
              echo "<br>";
        
        ?>
        
        
    </body>
</html>-->
