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
    <div class="header_fixed">
        <table>
            <thead>
                <tr>
                    <th id="Image">Image</th>
                    <th id="Name">Name</th>
                    <th id="Qual">Qualifications</th>
                    <th id="Action">Action</th>
                </tr>
            </thead>
            <tbody>
                <td><img src="../ADMIN/Bobby.png"></td>
                <td id="Name1">Bobby Brako</td>
                <td id="Qual1"><button>View</button></td>
                <td id="Action1"><button>Delete</button></td>
            </tbody>
            <tbody>
                <td><img src="../ADMIN/Cindy.png"></td>
                <td id="Name1">Cindy Osei</td>
                <td id="Qual1"><button>View</button></td>
                <td id="Action1"><button>Delete</button></td>
            </tbody>
            <tbody>
                <td><img src="../ADMIN/Bobby.png"></td>
                <td id="Name1">Kwame Fosu</td>
                <td id="Qual1"><button>View</button></td>
                <td id="Action1"><button>Delete</button></td>
            </tbody>
            <tbody>
                <td><img src="../ADMIN/Dubois.png"></td>
                <td id="Name1">Goka Okiete</td>
                <td id="Qual1"><button>View</button></td>
                <td id="Action1"><button>Delete</button></td>
            </tbody>
            <tbody>
                <td><img src="../ADMIN/Eben.png"></td>
                <td id="Name1">Baba Babs</td>
                <td id="Qual1"><button>View</button></td>
                <td id="Action1"><button>Delete</button></td>
            </tbody>
            <tbody>
                <td><img src="../ADMIN/Ella.png"></td>
                <td id="Name1">Amma Zebrona</td>
                <td id="Qual1"><button>View</button></td>
                <td id="Action1"><button>Delete</button></td>
            </tbody>
            <tbody>
                <td><img src="../ADMIN/Kelvin.png"></td>
                <td id="Name1">Ella Musid</td>
                <td id="Qual1"><button>View</button></td>
                <td id="Action1"><button>Delete</button></td>
            </tbody>
            <tbody>
                <td><img src="../ADMIN/Rita.png"></td>
                <td id="Name1">Turkson Dela</td>
                <td id="Qual1"><button>View</button></td>
                <td id="Action1"><button>Delete</button></td>
            </tbody>
            <tbody>
                <td><img src="../ADMIN/Tyler.png"></td>
                <td id="Name1">Luby RcCarthy</td>
                <td id="Qual1"><button>View</button></td>
                <td id="Action1"><button>Delete</button></td>
            </tbody>
    </div>
    
</body>
</html>