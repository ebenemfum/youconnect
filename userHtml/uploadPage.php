<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Page</title>
    <link rel="stylesheet" href="../userCss/UploadPage.css">
    <script src="https://kit.fontawesome.com/2ac6a790f8.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <img class="logo" src="../userImages/logo.png" alt="we_connect_logo" height=100px width=230px>
        <div class="logoutLink"> logout </div>   
    </header>
    

    <div class="upload_page_logo">
    <img class="noprofil" src="../userImages/noprofil.jpg" width=100 height=100 alt="">
    <div class="round">
        <input type="file">
        <i class = "fa-solid fa-camera" style="color: black;"></i>
    </div>
    </div>


    <form class="input-group">
        <input type="text" class="input-field1" placeholder="Your Name and Title (eg. Jabari Adu-Sarkodee, Software Engineer)">
        <br>
        <input type="text" class="input-field2" placeholder="Enter a decription of yourself and what you do (Max 200 words)" required>
        <div class="upload12">
            <button type="button" class="btn-warning">
                <i class="fa fa-upload"></i> Upload File
                <input type="file">
            </button>
        </div>

    </form>
    <img class="UploadPic" src="../userImages/UploadPic.png" width="600px" height="600px">

    
  

   


    <button type="upload" class="finish">Finish</button>
</div>

<?php
        if(isset($_POST['upld_Btn'])){
            $bio = $_POST['descrp'];

            mysqli_query($conn,"INSERT INTO Dev(Bio) VALUES ('$bio')");

        }
    ?>
<script>
        let msg = new SpeechSynthesisUtterance();
        let voices = speechSynthesis.getVoices();
        msg.voice = voices[0];
        let tags = document.querySelectorAll('button'); // add more tags for you project
        tags.forEach((tag) => {
            tag.addEventListener('click', (e) => {
        
                msg.text = e.target.innerText;
                tag.style.backgroundColor = "yellow";
                speechSynthesis.speak(msg);
        
                let interval = setInterval(() => {
                    if(!speechSynthesis.speaking){
                        tag.style.removeProperty('background-color');
                        clearInterval(interval);
                    }
                }, 100);
        
              });
        });
        </script>

    
</body>
</html>