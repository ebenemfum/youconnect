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
    <link rel="stylesheet" href="../ADMIN/AdminPage.css">
    <script src="https://kit.fontawesome.com/2ac6a790f8.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2ac6a790f8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> ≠≠

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

    <br>
    <br>

    <br>
    <br>

    <br>
    <br>

    <br>
    <br>

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