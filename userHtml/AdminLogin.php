<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../userCss/AdminLogin.css">
    <title>Login Page</title>
</head> 
<body>
<div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
               <!--  <button type="button" class="toggle-btn" onclick="register()">Register</button> -->
            </div>
            <img class="logo" src="../userImages/logo.png" alt="we_connect_logo">

            <form  id="login" method ="POST" id="login" class="input-group">
                <input type="text" name ="uname" id="uname" class="input-field" placeholder="User name" required>
                <input type="text" name ="pswd" id="pswd" class="input-field" placeholder="Enter Password" required>
                <!--<div><input type="checkbox" class="checkbox"><span> Remember Password</span></div>-->
                <button type="submit" name ="submit_btn" class="submit-btn">Log in</button>
    
            </form>
    
            
        </div>
        
        
           
</div>

<?php


if(isset($_POST['submit_btn'])){ 
     
            $uname=$_POST['uname']; 
            $password=$_POST['pswd']; 
            
            //verifying if login details match for staff
            $sql="select * from Administrator where Admin_name='".$uname."'AND Admin_password='".$password."' limit 1"; 

            $result=mysqli_query($conn,$sql); 
            
             
           if(mysqli_num_rows($result) > 0){ 
                header("location: AdminPage.php"); 
                 
               exit(); 
             }  
            
           #else{ 
            #    echo "<script language='javascript'>;
             #   alert('Incorrect details');
              #  </script>"; 
               # exit(); 
          #  } 



            
                 
        }
?>

<!-- <script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register(){
        x.style.left = "-400px";
        y.style.left = "10px";
        z.style.left = "110px";
    }

    function login(){
        x.style.left = "10px";
        y.style.left = "450px";
        z.style.left = "0px";
    }
</script>
 -->

</body>
</html>