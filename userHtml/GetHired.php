<?php
include "connect.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get hired</title>
    <link rel="stylesheet" href="../userCss/GetHired.css">
</head>
<body>

    <header>
        <img class="logo" src="../userImages/logo.png" alt="we_connect_logo" height=150px width=250px>
    </header>

    <a href="GetHiredLogin.html"><div class="logoutLink" > logout </div></a>

    <div class="interaction">
        <h3>What category of IT specialist best describes you?</h3>
        <label>
            <input type="radio" name="radio" />
            Software Engineer
        </label>
        <br>
        <br>
        <br>
        <label>
            <input type="radio" name="radio" />
            IT consultant
        </label>
        <br>
        <br>
        <br>
        <label>
            <input type="radio" name="radio" />
            Full Stack Web Developer
        </label>
        <br>
        <br>
        <br>
        <label>
            <input type="radio" name="radio" />
            Security Systems
        </label>
        <br>
        <br>
        <br>
        <label>
            <input type="radio" name="radio" />
            Other (Please Speacify)
            <br>
            <br>

            <input type="textarea" id="otherOption" name="otherOption">
        </label>
        
    </div>
    <a href="FreelanceOrProfesh.html"><img class="nextBtn" src="../userImages/nextBtn.png"></a>
    
</body>
</html>