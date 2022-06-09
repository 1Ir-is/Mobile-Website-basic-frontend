<?php 

session_start();


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagine - Connecting people and technology</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="user.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
</head>

<body>

    <!-- header -->
    <header>
        <!--menu -->
        <div class="menu bg-second">
            <a href="index.php" class="mb-logo">Imagine</a>
            <span class="mb-menu-toggle" id="mb-menu-toggle">
                <i class='bx bx-menu'></i>
            </span>
        </div>
        <!-- end menu -->
        <!-- main header -->
        <div class="header-wrapper" id="header-wrapper">
            <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
                <i class='bx bx-x'></i>
            </span>
            <!-- top header -->
            <div class="bg-main">
                <div class="top-header container">
                    <a href="index.php" class="logo">Imagine Shop</a>
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <i class='bx bx-search-alt'></i>
                    </div>
                    <ul class="user-menu">
                        <li><a href="#"><i class='bx bx-bell'></i></a></li>
                        <li><a href="profile.php"><i class='bx bx-user-circle'></i></a></li>
                        <li><a href="cart.php"><i class='bx bx-cart'></i><small class="cart_total">7</small></a></li>
                        <li><a href="logout.php"><i class='bx bx-log-out'></i></a></li>
                       
                    </ul>
                </div>
            </div>
            <!-- end top header -->
            <!-- bottom header -->
            <div class="bg-second">
                <div class="bottom-header container">
                    <ul class="main-menu">
                    <li><a href="profile.php">| Welcome <?php echo $_SESSION['username'] ; ?>      |</a></li>
                        <li><a href="welcome.php">Home</a></li>
                        <li><a href="contactus.php">Contact</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                    </ul>
                </div>
            </div>
            <!-- end bottom header -->
        </div>
        <!-- end main header -->
    </header>
    <!-- end header -->

    <!-- introduce section -->
    <div class="introduce">
        <div class="slider">
            <div class="container">
                <!-- slide item -->
                <div class="slide active">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                IPHONE 13 
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                New Inspiration 2022
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolor commodi dignissimos culpa, eaque eos necessitatibus possimus veniam, cupiditate rerum deleniti? Libero, ducimus error? Beatae velit dolore sint explicabo! Fugit.
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover">
                                    <span>Shop now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img top-down">
                        <img src="./images/banner_1.png" alt="">
                    </div>
                </div>
                <!-- end slide item -->
                <!-- slide item -->
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                SAMSUNG GALAXY S22 ULTRA 5G
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                New Generation 2022
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A optio, voluptatum aperiam nobis quis maxime corporis porro alias soluta sunt quae consectetur aliquid blanditiis perspiciatis labore cumque, ullam, quam eligendi!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover">
                                    <span>Shop now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img right-left">
                        <img src="./images/banner_11-removebg-preview.png" alt="">
                    </div>
                </div>
                <!-- end introduce -->
            </div>
            <!-- slider controller -->
            <button class="slide-controll slide-next">
                <i class='bx bxs-chevron-right'></i>
            </button>
            <button class="slide-controll slide-prev">
                <i class='bx bxs-chevron-left'></i>
            </button>
            <!-- end slider controller -->
        </div>
    </div>
    <!-- end hero section -->


    <!-- Smartphones list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>SMARTPHONES</h2>
            </div>
            <div class="row" id="Smartphone">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/samsung-galaxy-a73-5g.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Samsung Galaxy A73 5G
                            </div>
                            <div class="product-card-price">
                                <span>$522</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/samsung-galaxy-s22-plus-5g.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Samsung Galaxy S22+
                            </div>
                            <div class="product-card-price">
                                <span>$1132</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/samsung-galaxy-note20-ultra-.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Samsung Galaxy Note 20 Ultra 5G
                            </div>
                            <div class="product-card-price">
                                <span>$871</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/samsung-galaxy-s22-ultra-5g.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Samsung Galaxy S22 Ultra
                            </div>
                            <div class="product-card-price">
                                <span>$1350</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/samsung-galaxy-z-fold3-5g.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Samsung Galaxy ZFold 3 5G
                            </div>
                            <div class="product-card-price">
                                <span>$1698</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/samsung-galaxy-z-flip3-5g.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Samsung Galaxy ZFLIP 3 5G
                            </div>
                            <div class="product-card-price">
                                <span>$1698</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/apple-iphone-13.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Iphone 13 
                            </div>
                            <div class="product-card-price">
                                <span>$874</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/apple-iphone-13-pro-max.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Iphone 13 PRO MAX
                            </div>
                            <div class="product-card-price">
                                <span>$1399</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/products/iPhone/apple-iphone-13-pro.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Iphone 13 PRO
                            </div>
                            <div class="product-card-price">
                                <span>$1099</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/apple-iphone-13-mini.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Iphone 13 MINI
                            </div>
                            <div class="product-card-price">
                                <span>$799</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/apple-iphone-12.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Iphone 12
                            </div>
                            <div class="product-card-price">
                                <span>$750</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/apple-iphone-12-mini.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Iphone 12 MINI
                            </div>
                            <div class="product-card-price">
                                <span>$821</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/apple-iphone-12-pro--.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Iphone 12 PRO
                            </div>
                            <div class="product-card-price">
                                <span>$936</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/apple-iphone-12-pro-max-.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Iphone 12 PRO MAX
                            </div>
                            <div class="product-card-price">
                                <span>$1229</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/apple-iphone-11.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Iphone 11
                            </div>
                            <div class="product-card-price">
                                <span>$549</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/apple-iphone-11-pro.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Iphone 11 PRO
                            </div>
                            <div class="product-card-price">
                                <span>$639</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Smartphone/apple-iphone-11-pro-max-.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Iphone 11 PRO MAX
                            </div>
                            <div class="product-card-price">
                                <span>$889</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
    </div>
    <!-- end Smartphones list -->

        <!-- Tablet list-->
        <div class="section">
            <div class="container">
                <div class="section-header">
                    <h2>TABLETS</h2>
                </div>
                <div class="row" id="Tablet">
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./images/Tablet/samsung-galaxy-tab-s8.jpg" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-cart-add'></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-heart'></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    Samsung Galaxy Tab S8
                                </div>
                                <div class="product-card-price">
                                    <span>$699</span>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./images/Tablet/samsung-galaxy-tab-s8-plus.jpg" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-cart-add'></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-heart'></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    Samsung Galaxy Tab S8+
                                </div>
                                <div class="product-card-price">
                                    <span>$899</span>
                                </div>
                            </div>
                        </div>
                    </div>                             
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./images/Tablet/samsung-galaxy-tab-s8-ultra.jpg" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-cart-add'></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-heart'></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    Samsung Galaxy Tab S8 Ultra
                                </div>
                                <div class="product-card-price">
                                    <span>$1306</span>
                                </div>
                            </div>
                        </div>
                    </div>                             
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./images/Tablet/apple-ipad-air-2022-new.jpg" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-cart-add'></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-heart'></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    Apple iPad Air (2022)
                                </div>
                                <div class="product-card-price">
                                    <span>$599</span>
                                </div>
                            </div>
                        </div>
                    </div>                             
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./images/Tablet/samsung-galaxy-tab-s7-1.jpg" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-cart-add'></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-heart'></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    Samsung Galaxy Tab S7
                                </div>
                                <div class="product-card-price">
                                    <span>$649.99</span>
                                </div>
                            </div>
                        </div>
                    </div>                             
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./images/Tablet/samsung-galaxy-tab-s7-fe.jpg" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-cart-add'></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-heart'></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    Samsung Galaxy Tab S7 FE
                                </div>
                                <div class="product-card-price">
                                    <span>$529.99</span>
                                </div>
                            </div>
                        </div>
                    </div>                             
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./images/Tablet/samsung-galaxy-tab-s7-plus1.jpg" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-cart-add'></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-heart'></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    Samsung Galaxy Tab S7+
                                </div>
                                <div class="product-card-price">
                                    <span>$849.99</span>
                                </div>
                            </div>
                        </div>
                    </div>                             
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./images/Tablet/apple-ipad-pro-129-2021.jpg" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-cart-add'></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-heart'></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    Apple iPad Pro 12.9 (2021)
                                </div>
                                <div class="product-card-price">
                                    <span>$1,099</span>
                                </div>
                            </div>
                        </div>
                    </div>                             
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./images/Tablet/apple-ipad-pro-11-2020.jpg" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-cart-add'></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-heart'></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    Apple iPad Pro 11 (2020)
                                </div>
                                <div class="product-card-price">
                                    <span>$749</span>
                                </div>
                            </div>
                        </div>
                    </div>                             
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./images/Tablet/apple-ipad-pro-11-2021.jpg" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-cart-add'></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-heart'></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    Apple iPad Pro 11 (2021)
                                </div>
                                <div class="product-card-price">
                                    <span>$749</span>
                                </div>
                            </div>
                        </div>
                    </div>                             
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./images/Tablet/samsung-galaxy-tab-s6.jpg" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-cart-add'></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-heart'></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    Samsung Galaxy Tab S6
                                </div>
                                <div class="product-card-price">
                                    <span>$479</span>
                                </div>
                            </div>
                        </div>
                    </div>                             
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./images/Tablet/galaxy-tab-s6-lite.jpg" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-cart-add'></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-heart'></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    Samsung Galaxy Tab S6 Lite
                                </div>
                                <div class="product-card-price">
                                    <span>$392</span>
                                </div>
                            </div>
                        </div>
                    </div>                             
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./images/Tablet/samsung-galaxy-tab-s6-5g-sm-t866n.jpg" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-cart-add'></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class='bx bxs-heart'></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    Samsung Galaxy Tab S6 5G
                                </div>
                                <div class="product-card-price">
                                    <span>$729</span>
                                </div>
                            </div>
                        </div>
                    </div>                             
                </div>
            </div>
        </div>
        <!-- end Tablet list -->

            <!-- Watch list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>WATCHES</h2>
            </div>
            <div class="row" id="watches">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Watch/samsung-galaxy-watch-.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Samsung Galaxy Watch
                            </div>
                            <div class="product-card-price">
                                <span>$231,88</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Watch/samsung-galaxy-watch3.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Samsung Galaxy Watch3
                            </div>
                            <div class="product-card-price">
                                <span>$231</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Watch/samsung-galaxy-watch4-classic.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Samsung Galaxy Watch4 Classic
                            </div>
                            <div class="product-card-price">
                                <span>$237,15</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Watch/samsung-galaxy-watch4.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Samsung Galaxy Watch4 
                            </div>
                            <div class="product-card-price">
                                <span>$299.99</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Watch/samsung-galaxy-watch-active.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Samsung Galaxy Watch Active
                            </div>
                            <div class="product-card-price">
                                <span>$217,80</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Watch/samsung-galaxy-watch-active2-.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Samsung Galaxy Watch Active2 Aluminum
                            </div>
                            <div class="product-card-price">
                                <span>$316,20</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Watch/samsung-galaxy-watch-active2-stainless-steel.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Samsung Galaxy Watch Active2
                            </div>
                            <div class="product-card-price">
                                <span>$275.91</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Watch/apple-watch-s6.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Apple Watch Series 6 Aluminum
                            </div>
                            <div class="product-card-price">
                                <span>$748,34</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Watch/apple-watch-s6-steel.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Apple Watch Series 6 
                            </div>
                            <div class="product-card-price">
                                <span>$442,68</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Watch/apple-watch-s6-titanium.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Apple Watch Edition Series 6
                            </div>
                            <div class="product-card-price">
                                <span>$853,74</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Watch/apple-watch-series-7-stainless-steel.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Apple Watch Series 7
                            </div>
                            <div class="product-card-price">
                                <span>$600</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Watch/apple-watch-series-7-aluminum.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Apple Watch Series 7 Aluminum
                            </div>
                            <div class="product-card-price">
                                <span>$408</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Watch/apple-watch-series-7-titanium.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Apple Watch Edition Series 7
                            </div>
                            <div class="product-card-price">
                                <span>$874,82</span>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
    <!-- end Watch list -->

    <!-- Earphones list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>EARPHONES</h2>
            </div>
            <div class="row" id="Earphones">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Earphone/vn-galaxy-buds2-r177-sm-r177nzkaxxv-thumb-481673299.png" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Galaxy Buds2
                            </div>
                            <div class="product-card-price">
                                <span>$130,68</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Earphone/vn-galaxy-buds-pro-r190-sm-r190nzvaxxv-508267361.png" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Galaxy Buds Pro
                            </div>
                            <div class="product-card-price">
                                <span>$217,80</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Earphone/vn-galaxy-buds-live-r180-sm-r180nznaxxv-thumb-508264340.png" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Galaxy Buds Live
                            </div>
                            <div class="product-card-price">
                                <span>$108,90</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Earphone/vn-galaxy-buds-plus-r175-sm-r175nzkaxxv-frontblack-thumb-209264440.png" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                Galaxy Buds+
                            </div>
                            <div class="product-card-price">
                                <span>$149</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Earphone/AirPods-2-ShopDunk.webp" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                AirPods 2
                            </div>
                            <div class="product-card-price">
                                <span>$191,23</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Earphone/bluetooth-airpods-3-1.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                AirPods 3
                            </div>
                            <div class="product-card-price">
                                <span>$239,15</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Earphone/bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-1.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                AirPods Pro
                            </div>
                            <div class="product-card-price">
                                <span>$226,08</span>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/Earphone/bluetooth-airpods-max-apple-1-org.jpg" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                AirPods Max
                            </div>
                            <div class="product-card-price">
                                <span>$609,85</span>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
    <!-- end Earphones list -->

     <!--Footer-->

     <footer class="footer-distributed">
        <div class="footer-left">
          <h3>Imagine</h3> 
          <p class="footer-links">
          <a href="#" class="link-1">Home</a>          
            <a href="#">Blog</a>          
            <a href="#">Pricing</a>         
            <a href="#">About</a>           
            <a href="#">Faq</a>           
            <a href="#">Contact</a>
          </p> 
          <p class="footer-company-name">Imagine © 2022</p>
        </div> 
        <div class="footer-center">
          <div>
            <i class='bx bx-map'></i>
            <p><span>1st Street, An Don Industrial Park, An Hai Bac Ward</span>Son Tra District, Da Nang, Vietnam</p>
          </div>
          <div>
            <i class='bx bxs-phone'></i>
            <p>0914048099</p>
          </div>
          <div>
            <i class='bx bxs-envelope'></i>
            <p><a href="https://greenwich.edu.vn/en/english/">https://greenwich.edu.vn/en/english/</a></p>
          </div>
        </div> 
        <div class="footer-right"> 
          <p class="footer-company-about">
            <span>About the company</span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
          </p>
          <div class="footer-icons">
            <a href="https://www.facebook.com/minhhuy.huynh.5076"><i class='bx bxl-facebook-circle'></i></a>
            <a href="https://www.instagram.com/call_me_irisssss/"><i class='bx bxl-instagram-alt' ></i></a>
            <a href="https://github.com/1Ir-is"><i class='bx bxl-github'></i></a>
          </div>
        </div>
      </footer>
    
    <!-- app js -->
    <script src="./js/index.js"></script>
</body>

</html>