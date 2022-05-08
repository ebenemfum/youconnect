<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../userCss/login.css">
    <title>Login Page</title>
</head>
<body>
<div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <img class="logo" src="../userImages/logo.png" alt="we_connect_logo" height=70px width=150px>

            <form  id="login" method ="POST"  class="input-group">
                <input type="text" name = "uname" id="uname" class="input-field" placeholder="User name" required>
                <input type="text" name="pswd" id="pswd"  class="input-field" placeholder="Enter Password" required>
                <!--<div><input type="checkbox" class="checkbox"><span> Remember Password</span></div>-->
                <button type="submit" name = "logBtn" class="submit-btn">Log in</button>
    
            </form>
    
            <form id="register" method ="POST" class="input-group">
            <input type="text" name ="fname" id="fname" class="input-field" placeholder="First Name" required>
                <input type="text" name ="lname" id="lname" class="input-field" placeholder="Last Name" required>
                <input type="text" name="uname" id="uname" class="input-field" placeholder="Username" required>
                <input type="email" name="dev_email" id="dev_email" class="input-field" placeholder=" Email" required>
                <input type="text" name="dev_pass" id="dev_pass" class="input-field" placeholder=" Password" required>
                <!--<div><input type="checkbox" class="checkbox"><span> Remember Password</span></div>-->
                <button type="submit" name ="regBtn" id ="regBtn"  class="submit-btn">Register</button>
            </form>  
        </div>
        
        
           
</div>

<?php
        if(isset($_POST['regBtn'])){
            $_SESSION['fname']= $fname = $_POST['fname'];
            $_SESSION['lname'] = $lname = $_POST['lname'];
            $_SESSION['uname'] = $uname =$_POST['uname'];
            $_SESSION['dev_email'] =  $dev_email = $_POST['dev_email'];
            $_SESSION['dev_pass']=$dev_pass = $_POST['dev_pass'];
            
     
                        
    
            mysqli_query($conn,"INSERT INTO Dev (Fname, Lname, Uname, Dev_email, Dev_password) VALUES ('$fname','$lname','$uname','$dev_email','$dev_pass')");
            
            echo "<script>alert('Registration Successful');</script>";
			
           
            header("location: GetHired.php");
        }
        elseif(isset($_POST['logBtn'])){ 
     
            $uname=$_POST['uname']; 
            $password=$_POST['pswd']; 
            
            //verifying if login details match for staff
            $sql="select * from Dev where Uname='".$uname."'AND Dev_password='".$password."' limit 1"; 

            $result=mysqli_query($conn,$sql); 
            
             
           if(mysqli_num_rows($result) > 0){ 
                header("location: ITSpecialistsAfterLogin.html"); 
                 
               exit(); 
             }  
            
           else{ 
                echo "<script language='javascript'>;
                 alert('Incorrect details');
                </script>"; 
                exit(); 
            } 



            
                 
        }
?>

<script>
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


</body>
</html>