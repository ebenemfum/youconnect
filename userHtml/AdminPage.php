<?php
    include "connect.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin User</title>
    <link rel="stylesheet" href="AdminPage.css">
    <script src="https://kit.fontawesome.com/2ac6a790f8.js" crossorigin="anonymous"></script>
</head>
<body>

    <header>
        <div class ="left_area">
            <img class="logo" src="../userImages/logo.png" alt="we_connect_logo" height="100px" width="230px">
        </div>
        <div class="right_area">
            <a href="#" class="logout_btn">Logout</a>
        </div>
    </header>



    <div class="sidebar">
        <center>
            <img src="../ADMIN/adminMan.png" class="profile_image" alt="">
            <h4> Emmanuel</h4>
        </center>
        <a href="AdminPage.html"><i class="fas fa-user"></i> <span>Software Devs</span> </a>
        <a href="SoftwareDevUser.html"><i class="fas fa-bars-progress"></i> Sofware Dev Users<span></span> </a>
        
    </div>
    <div class="container">
      <div class="jumbotron">
             <div class="card_main">
                     <div class="card-body">
                         <h5 class="card-title">IT Specialists</h5>
                         <table class="table table-hover table-bordered">
                                 <thead>
                                     <tr>
                                     <th scope="col">First Name</th>
                                     <th scope="col">Last Name</th>
                                     <th scope="col">Category</th>
                                     <th scope="col">Bio</th>
                                     <th scope="col">Job Experience</th>
                                     <th scope="col">Skills</th>
                                   
                                     
       
                 
                                     </tr>
                                 </thead>

                                 <?php
                                       $s = mysqli_query($conn,"select*from Dev");
                                       while($r=mysqli_fetch_array($s))
                                       {
                                       ?>
                                         <tbody>
                                         <tr>
                                                  <th><?php echo $r['Fname'];?></th>
                                                  <td><?php echo $r['Lname'];?></td>
                                                  <td><?php echo $r['Category'];?></td>
                                                  <td><?php echo $r['Bio'];?></td>
                                                  <td><?php echo $r['job_experience'];?></td>
                                                  <td><?php echo $r['skills'];?></td>
                                                  
                                                 
                                         </tr>
                                     </tbody>

                                     <?php
                                       }
                                    ?>
                                 
                          </table>
                     </div>
                 
             </div>
        
    
</body>
</html>