<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../userCss/ITSpecialistList.css">
    <title>IT Specialist List</title>
    <script src="https://kit.fontawesome.com/2ac6a790f8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- Start of Code -->
<script>
    "use strict";
    !function() {
      var t = window.driftt = window.drift = window.driftt || [];
      if (!t.init) {
        if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
        t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
        t.factory = function(e) {
          return function() {
            var n = Array.prototype.slice.call(arguments);
            return n.unshift(e), t.push(n), t;
          };
        }, t.methods.forEach(function(e) {
          t[e] = t.factory(e);
        }), t.load = function(t) {
          var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
          o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
          var i = document.getElementsByTagName("script")[0];
          i.parentNode.insertBefore(o, i);
        };
      }
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('u6yn43whfbbh');
    </script>
    <!-- End of Code -->
</head>
<body>

  
  <header>
        
    <!--  <a href="#"><div class="sPredict"> Salary prediction </div></a> -->
     <!-- <a href="GetHiredLogin.html"><div class="logoutLink">  logout </div></a> -->
 <!--     <a href="#"><div class="prediction">  Predict Salaries </div></a>
     <div class="search-box">
         <input class="search-txt" type="text" name="" placeholder="Type to search">
         <a class="search-btn" href="#">
             <i class="fa-solid fa-magnifying-glass"></i>
         </a>
     </div> -->
     <nav>
         <img class="logo" src="../userImages/logo.png" alt="we_connect_logo" height=100px width=230px>
         <ul class="nav_links">
         <li> <a href="GetHiredLogin.html" class="logout">logout </div></a></li>
         <li> <a href="http://172.16.0.79:8501"  class="predict"> Predict Salaries </div></a> </li>
         <li> <a href="uploadBusiness.html"  class="myBio"> My Bio </div></a> </li>
         <li> <div class="search-box">
             <input class="search-txt" type="text" name="" placeholder="Type to search">
             <a class="search-btn" href="#">
                 <i class="fa-solid fa-magnifying-glass"></i>
             </a>
         </div></li>
     </nav>
     </header>





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
         </div>  
  </div>



    
</body>
</html>