<!DOCTYPE html>
<html lang="en">
<?php include('dbconnection.php');?>
    <head>
        <!--=====================================
                    META TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- AUTHOR META -->
        <meta name="author" content="mironcoder">
        <meta name="email" content="mironcoder@gmail.com">
        <meta name="profile" content="">

        <!-- TEMPLATE META -->
        <meta name="name" content="delighthub">
        <meta name="title" content="delighthub - eCommerce">
        <meta name="keywords" content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, webshop, farm, grocery, natural, online store">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- WEBPAGE TITLE -->
        <title>Category Home - Greeny</title>

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <!-- FAVICON -->
        <link rel="icon" href="images/Favicon.svg">

        <!-- FONTS -->
        <link rel="stylesheet" href="fonts/flaticon/flaticon.css">
        <link rel="stylesheet" href="fonts/icofont/icofont.min.css">
        <link rel="stylesheet" href="fonts/fontawesome/fontawesome.min.css">

        <!-- VENDOR -->
        <link rel="stylesheet" href="vendor/venobox/venobox.min.css">
        <link rel="stylesheet" href="vendor/slickslider/slick.min.css">
        <link rel="stylesheet" href="vendor/niceselect/nice-select.min.css">
        <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">

        <!-- CUSTOM -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/home-category.css">
        <link rel="stylesheet" href="css/index.css">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
        <div class="backdrop"></div>
        <a class="backtop fas fa-arrow-up" href="#"></a>
        
        <!--=====================================
                    HEADER TOP PART START
        =======================================-->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="header-top-welcome">
                            <p>Welcome to Delights Hub Online Store!</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-2">
                        <div class="header-top-select">
                            <div class="header-select">
                                <i class="icofont-world"></i>
                                <select class="select">
                                    <option value="english" selected>english</option>
                                    <option value="bangali">bangali</option>
                                    <option value="arabic">arabic</option>
                                </select>
                            </div>
                            <div class="header-select">
                                <i class="icofont-money"></i>
                                <select class="select">
                                    <option value="english" selected>doller</option>
                                    <option value="bangali">pound</option>
                                    <option value="arabic">taka</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-4">
                        <ul class="header-top-list">
                            <li> 
                                <p style="color: aliceblue;">
                                    <!-- <small>call us</small> -->
                                    <i class="icofont-ui-touch-phone"></i><span> 999 999 9999</span>
                                </p></li>
                            <li>
                                <p style="color: aliceblue;">
                                    <!-- <small>email us</small> -->
                                    <i class="icofont-email"></i><span>  support@delighthub.com</span>
                                </p></li>
                            <!-- <li><a href="contact.html">contact us</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================
                    HEADER TOP PART END 
        =======================================-->


    
        <!--=====================================
                    HEADER PART START
        =======================================-->
        <header class="header-part">
            <div class="container">
                <div class="header-content">
                    <div class="header-media-group">
                        <button class="header-user"><img src="images/user.png" alt="user"></button>
                        <a href="index.php"><img src="images/logo.png" alt="logo"></a>
                        <button class="header-src"><i class="fas fa-search"></i></button>
                    </div>

                    <a href="index.php" class="header-logo">
                        <img src="images/logo.png" alt="logo">
                    </a>
                    <div class=""> 
                        
                        
                        <!-- <a href="" class="header-widget ms-3 dropdown-arrow"><span>Products</span></a> -->
                        <ul class="navbar-list1 dropdown1">
                            <li class=" header-widget1 ms-6 dropdown-megamenu">
                                <a href="" class="header-widget ms-3 dropdown-arrow1"><span>Products</span></a>
                                <div class="megamenu">
                                    <div class="container">
                                        <div class="row row-cols-6">
                                            <?php 
                                                $sql="select * from tbl_category where CATEG02='Active'";
                                                $result=mysqli_query($con,$sql);
                                                while($row=mysqli_fetch_array($result)){
                                                    echo    '<div class="col">
                                                                <div class="megamenu-wrap">
                                                                    <h5 class="megamenu-title">'.$row['CATEG01'].'</h5>
                                                                    <ul class="megamenu-list">';
                                                                    $sqlx="select * from tbl_subcategory where SUBCAT03='Active' and SUBCAT02='".$row['CATEGTID']."'";
                                                                    $resultx=mysqli_query($con,$sqlx);
                                                                    while($rowx=mysqli_fetch_array($resultx)){
                                                                        echo '<li><a href="#">'.$rowx['SUBCAT01'].'</a></li>';
                                                                    }
                                                              echo  '</ul>
                                                                </div>
                                                             </div>';
                                                }
                                            ?>
                                            <!-- <div class="col">
                                                <div class="megamenu-wrap">
                                                    <h5 class="megamenu-title">Food</h5>
                                                    <ul class="megamenu-list">
                                                        <li><a href="#">carrot</a></li>
                                                        <li><a href="#">broccoli</a></li>
                                                        <li><a href="#">asparagus</a></li>
                                                        <li><a href="#">cauliflower</a></li>
                                                        <li><a href="#">eggplant</a></li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    
                    </div>
                   
                    <a href="" class="header-widget ms-3"><span>Request Product</span></a>

                    <ul class="navbar-list dropdown">
                        <li class=" header-widget ms-3 dropdown-megamenu">
                            <a href="" class="header-widget ms-3 dropdown-arrow1"><span>More</span></a>
                                <ul class="dropdown-position-list">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    
                                </ul>
                           
                        </li>
                    </ul>
                    
                    <form class="header-form">
                        <input type="text" placeholder="Search anything...">
                        <button><i class="fas fa-search"></i></button>
                    </form>

                    <div class="header-widget-group">
                        <!-- <a href="compare.html" class="header-widget" title="Compare List">
                            <i class="fas fa-random"></i>
                            <sup>0</sup>
                        </a> -->
                        <!-- <a href="wishlist.html" class="header-widget" title="Wishlist">
                            <img src="images/user.png" alt="user">
                        </a> -->

                        <ul class="navbar-list dropdown">
                            <li class=" header-widget ms-3 dropdown-megamenu">
                                <!-- <a href="" class="header-widget ms-3 dropdown-arrow1"><span>More</span></a> -->
                                <a href="wishlist1.html" class="header-widget" title="Wishlist">
                                    <img src="images/user.png" alt="user">
                                </a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="login.php">Log In</a></li>
                                        <li><a href="register.php">Register</a></li>
                                        
                                    </ul>
                               
                            </li>
                        </ul>


                        
                        <button class="header-widget header-cart" title="Cartlist">
                            <i class="fas fa-shopping-basket"></i>
                            <sup>9+</sup>
                            <!-- <span>total price<small>$345.00</small></span> -->
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!--=====================================
                    HEADER PART END
        =======================================-->