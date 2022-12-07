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
        <link rel="stylesheet" href="css/product-details.css">
        <link rel="stylesheet" href="css/blog-grid.css">
        <link rel="stylesheet" href="css/user-auth.css">
        <link rel="stylesheet" href="css/about.css">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/checkout.css">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
        <style>
            @media (min-width: 320px) and (max-width: 767px) {
                html {
                    overflow-x: hidden;
                }
            }

            .form-select {
           
           width: 200px;
         
         }
        </style>
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
                   
                    <a href="product-request.php" class="header-widget ms-3"><span>Request Product</span></a>

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


        <!--=====================================
                CATEGORY SIDEBAR PART START
        =======================================-->
        <aside class="category-sidebar">
            <div class="category-header">
                <h4 class="category-title">
                    <i class="fas fa-align-left"></i>
                    <span>categories</span>
                </h4>
                <button class="category-close"><i class="icofont-close"></i></button>
            </div>
            <ul class="category-list">
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-vegetable"></i>
                        <span>vegetables</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">asparagus</a></li>
                        <li><a href="#">broccoli</a></li>
                        <li><a href="#">carrot</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-groceries"></i>
                        <span>groceries</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Grains & Bread</a></li>
                        <li><a href="#">Dairy & Eggs</a></li>
                        <li><a href="#">Oil & Fat</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-fruit"></i>
                        <span>fruits</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Orange</a></li>
                        <li><a href="#">Strawberry</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-dairy-products"></i>
                        <span>dairy farm</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Egg</a></li>
                        <li><a href="#">milk</a></li>
                        <li><a href="#">butter</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-crab"></i>
                        <span>sea foods</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Lobster</a></li>
                        <li><a href="#">Octopus</a></li>
                        <li><a href="#">Shrimp</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-salad"></i>
                        <span>diet foods</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Salmon</a></li>
                        <li><a href="#">Potatoes</a></li>
                        <li><a href="#">Greens</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-dried-fruit"></i>
                        <span>dry foods</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">noodles</a></li>
                        <li><a href="#">Powdered milk</a></li>
                        <li><a href="#">nut & yeast</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-fast-food"></i>
                        <span>fast foods</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">mango</a></li>
                        <li><a href="#">plumsor</a></li>
                        <li><a href="#">raisins</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-cheers"></i>
                        <span>drinks</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Wine</a></li>
                        <li><a href="#">Juice</a></li>
                        <li><a href="#">Water</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-beverage"></i>
                        <span>coffee</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Cappuchino</a></li>
                        <li><a href="#">Espresso</a></li>
                        <li><a href="#">Latte</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-barbecue"></i>
                        <span>meats</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Meatball</a></li>
                        <li><a href="#">Sausage</a></li>
                        <li><a href="#">Poultry</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-fish"></i>
                        <span>fishes</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Agujjim</a></li>
                        <li><a href="#">saltfish</a></li>
                        <li><a href="#">pazza</a></li>
                    </ul>
                </li>
            </ul>
            <div class="category-footer">
                <p>All Rights Reserved by <a href="#">Delights Hub</a></p>
            </div>
        </aside>
        <!--=====================================
                CATEGORY SIDEBAR PART END
        =======================================-->


        <!--=====================================
                  NAV SIDEBAR PART START
        =======================================-->
        <aside class="nav-sidebar">
            <div class="nav-header">
                <a href="#"><img src="images/logo.png" alt="logo"></a>
                <button class="nav-close"><i class="icofont-close"></i></button>
            </div>
            <div class="nav-content">
                <div class="nav-btn">
                    <a href="login.html" class="btn btn-inline">
                        <i class="fa fa-unlock-alt"></i>
                        <span>join here</span>
                    </a>
                </div>
                <!-- This commentable code show when user login or register -->
                <!-- <div class="nav-profile">
                    <a class="nav-user" href="#"><img src="images/user.png" alt="user"></a>
                    <h4 class="nav-name"><a href="profile.html">Miron Mahmud</a></h4>
                </div> -->
                <div class="nav-select-group">
                    <div class="nav-select">
                        <i class="icofont-world"></i>
                        <select class="select">
                            <option value="english" selected>English</option>
                            <option value="bangali">Bangali</option>
                            <option value="arabic">Arabic</option>
                        </select>
                    </div>
                    <div class="nav-select">
                        <i class="icofont-money"></i>
                        <select class="select">
                            <option value="english" selected>Doller</option>
                            <option value="bangali">Pound</option>
                            <option value="arabic">Taka</option>
                        </select>
                    </div>
                </div>
                <ul class="nav-list">
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                        <ul class="dropdown-list">
                            <li><a href="home-grid.html">Home grid</a></li>
                            <li><a href="index.html">Home index</a></li>
                            <li><a href="home-classic.html">Home classic</a></li>
                            <li><a href="home-standard.html">Home standard</a></li>
                            <li><a href="home-category.html">Home category</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                        <ul class="dropdown-list">
                            <li><a href="shop-5column.html">shop 5 column</a></li>
                            <li><a href="shop-4column.html">shop 4 column</a></li>
                            <li><a href="shop-3column.html">shop 3 column</a></li>
                            <li><a href="shop-2column.html">shop 2 column</a></li>
                            <li><a href="shop-1column.html">shop 1 column</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                        <ul class="dropdown-list">
                            <li><a href="product-tab.html">product tab</a></li>
                            <li><a href="product-grid.html">product grid</a></li>
                            <li><a href="product-tab.php">product video</a></li>
                            <li><a href="product-simple.html">product simple</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                        <ul class="dropdown-list">
                            <li><a href="profile.html">profile</a></li>
                            <li><a href="wallet.html">wallet</a></li>
                            <li><a href="wishlist.html">wishlist</a></li>
                            <li><a href="compare.html">compare</a></li>
                            <li><a href="checkout.html">checkout</a></li>
                            <li><a href="orderlist.html">order history</a></li>
                            <li><a href="invoice.html">order invoice</a></li>
                            <li><a href="email-template.html">email template</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentic</a>
                        <ul class="dropdown-list">
                            <li><a href="login.html">login</a></li>
                            <li><a href="register.html">register</a></li>
                            <li><a href="reset-password.html">reset password</a></li>
                            <li><a href="change-password.html">change password</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                        <ul class="dropdown-list">
                            <li><a href="blog-grid.html">blog grid</a></li>
                            <li><a href="blog-standard.html">blog standard</a></li>
                            <li><a href="blog-details.html">blog details</a></li>
                            <li><a href="blog-author.html">blog author</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="offer.html"><i class="icofont-sale-discount"></i>offers</a></li>
                    <li><a class="nav-link" href="about.html"><i class="icofont-info-circle"></i>about us</a></li>
                    <li><a class="nav-link" href="faq.html"><i class="icofont-support-faq"></i>need help</a></li>
                    <li><a class="nav-link" href="contact.html"><i class="icofont-contacts"></i>contact us</a></li>
                    <li><a class="nav-link" href="privacy.html"><i class="icofont-warning"></i>privacy policy</a></li>
                    <li><a class="nav-link" href="coming-soon.html"><i class="icofont-options"></i>coming soon</a></li>
                    <li><a class="nav-link" href="error.html"><i class="icofont-ui-block"></i>404 error</a></li>
                    <li><a class="nav-link" href="login.html"><i class="icofont-logout"></i>logout</a></li>
                </ul>
                <div class="nav-info-group">
                    <div class="nav-info">
                        <i class="icofont-ui-touch-phone"></i>
                        <p>
                            <small>call us</small>
                            <span>(+880) 183 8288 389</span>
                        </p>
                    </div>
                    <div class="nav-info">
                        <i class="icofont-ui-email"></i>
                        <p>
                            <small>email us</small>
                            <span>support@greeny.com</span>
                        </p>
                    </div>
                </div>
                <div class="nav-footer">
                    <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
                </div>
            </div>
        </aside>
        <!--=====================================
                  NAV SIDEBAR PART END
        =======================================-->


        <!--=====================================
                    MOBILE-MENU PART START
        =======================================-->
        <div class="mobile-menu">
            <a href="index.html" title="Home Page">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
            <button class="cate-btn" title="Category List">
                <i class="fas fa-list"></i>
                <span>category</span>
            </button>
            <button class="cart-btn" title="Cartlist">
                <i class="fas fa-shopping-basket"></i>
                <span>cartlist</span>
                <sup>9+</sup>
            </button>
            <a href="wishlist.html" title="Wishlist">
                <i class="fas fa-heart"></i>
                <span>wishlist</span>
                <sup>0</sup>
            </a>
            <!-- <a href="compare.html" title="Compare List">
                <i class="fas fa-random"></i>
                <span>compare</span>
                <sup>0</sup>
            </a> -->
        </div>
        <!--=====================================
                    MOBILE-MENU PART END
        =======================================-->
