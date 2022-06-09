<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$database = "login_register_pure_coding";

$conn = mysqli_connect($server, $user, $pass, $database);
if(mysqli_connect_error()){
    echo "Failed to connect to MySQL: " .mysqli_connect_error();
    exit();
}

$s = "SELECT * FROM users where username ='".$_SESSION['username']."'";   
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Profile</title>
</head>
<body>
    <div class="container">
        <div class="leftbox">
           <nav>
               <a href="">
                <i class='bx bxs-user-pin'></i>
               </a>
               <a href="">
                <i class='bx bxs-credit-card'></i>
               </a>
               <a href="">
                <i class='bx bx-list-ul' ></i>
               </a>
               <a href="">
                <i class='bx bx-cog' ></i>
               </a>
               <a href="index.php">
                <i class='bx bxs-log-out-circle' ></i>
               </a>
           </nav>
        </div>
        <div class="rightbox">
            <div class="profile tabShow">
                    <h1>User Profile</h1>
                    <h2>Id</h2>
                    <p> <?php echo $row['id'] ; ?> </p>
                    <h2>Username</h2>
                    <p> <?php echo $row['username'] ; ?> </p>
                    <h2>Email</h2>
                    <p> <?php echo $row['email'] ; ?></p>
                    <h2>Phone Number</h2>
                    <p> <?php echo $row['phone'] ; ?></p>
            </div>
        </div>
    </div>

  

</body>
</html>