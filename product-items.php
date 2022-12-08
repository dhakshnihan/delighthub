

       <?php include('header.php');?>
    <?php include('cart.php');?>
    <?php include ('productview.php');?>

        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
            <div class="container">
                <h2>Product List</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product More Items</li>
                </ol>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                    SHOP PART START
        =======================================-->
        <section class="inner-section shop-part">
            <div class="container">
                <div class="row content-reverse">
                    <div class="col-lg-3">
                        <div class="shop-widget-promo">
                            <a href="#"><img src="images/promo/shop/01.jpg" alt="promo"></a>
                        </div>
                        <div class="shop-widget">
                            <h6 class="shop-widget-title">Filter by Price</h6>
                            <form>
                                <div class="shop-widget-group">
                                    <input type="text" placeholder="Min - 00">
                                    <input type="text" placeholder="Max - 5k">
                                </div>
                                <button class="shop-widget-btn">
                                    <i class="fas fa-search"></i>
                                    <span>search</span>
                                </button>
                            </form>
                        </div>
                        <div class="shop-widget">
                            <h6 class="shop-widget-title">Filter by Rating</h6>
                            <form>
                                <ul class="shop-widget-list">
                                    <li>
                                        <div class="shop-widget-content">
                                            <input type="checkbox" id="feat1">
                                            <label for="feat1">
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                            </label>
                                        </div>
                                        <span class="shop-widget-number">(13)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <input type="checkbox" id="feat2">
                                            <label for="feat2">
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star"></i>
                                            </label>
                                        </div>
                                        <span class="shop-widget-number">(28)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <input type="checkbox" id="feat3">
                                            <label for="feat3">
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </label>
                                        </div>
                                        <span class="shop-widget-number">(35)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <input type="checkbox" id="feat4">
                                            <label for="feat4">
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </label>
                                        </div>
                                        <span class="shop-widget-number">(47)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <input type="checkbox" id="feat5">
                                            <label for="feat5">
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </label>
                                        </div>
                                        <span class="shop-widget-number">(59)</span>
                                    </li>
                                </ul>
                                <button class="shop-widget-btn">
                                    <i class="far fa-trash-alt"></i>
                                    <span>clear filter</span>
                                </button>
                            </form>
                        </div>
                        <div class="shop-widget">
                            <h6 class="shop-widget-title">Filter by Category</h6>
                            <form>
                                <input class="shop-widget-search" type="text" placeholder="Search...">
                                <ul class="shop-widget-list shop-widget-scroll">
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="cate1">
                                            <label for="cate1">vegetables</label> -->
                                            <select id="brand1" class="form-select form-select-lg">
                                                <option value="vegetables">vegetables</option>
                                            </select> 
                                        </div>
                                        <span class="shop-widget-number">(13)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="cate2">
                                            <label for="cate2">groceries</label> -->
                                            <select id="brand1" class="form-select form-select-lg">
                                                <option value="groceries">groceries</option>
                                            </select> 
                                        </div>
                                        <span class="shop-widget-number">(28)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="cate3">
                                            <label for="cate3">fruits</label> -->
                                            <select id="brand1" class="form-select form-select-lg">
                                                <option value="fruits">fruits</option>
                                            </select> 
                                        </div>
                                        <span class="shop-widget-number">(35)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="cate4">
                                            <label for="cate4">dairy farm</label> -->
                                            <select id="brand1" class="form-select form-select-lg">
                                                <option value="dairy farm">dairy farm</option>
                                            </select> 
                                        </div>
                                        <span class="shop-widget-number">(47)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="cate5">
                                            <label for="cate5">sea foods</label> -->
                                            <select id="brand1" class="form-select form-select-lg">
                                                <option value="sea foods">sea foods</option>
                                            </select> 
                                        </div>
                                        <span class="shop-widget-number">(59)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="cate6">
                                            <label for="cate6">diet foods</label> -->
                                            <select id="brand1" class="form-select form-select-lg">
                                                <option value="diet foods">diet foods</option>
                                            </select> 
                                        </div>
                                        <span class="shop-widget-number">(64)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="cate7">
                                            <label for="cate7">dry foods</label> -->
                                            <select id="brand1" class="form-select form-select-lg">
                                                <option value="dry foods">dry foods</option>
                                            </select> 
                                        </div>
                                        <span class="shop-widget-number">(77)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="cate8">
                                            <label for="cate8">fast foods</label> -->
                                            <select id="brand1" class="form-select form-select-lg">
                                                <option value="fast foods">fast foods</option>
                                            </select> 
                                        </div>
                                        <span class="shop-widget-number">(85)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="cate9">
                                            <label for="cate9">drinks</label> -->
                                            <select id="brand1" class="form-select form-select-lg">
                                                <option value="drinks">drinks</option>
                                            </select> 
                                        </div>
                                        <span class="shop-widget-number">(92)</span>
                                    </li>
                                    
                                </ul>
                                <button class="shop-widget-btn">
                                    <i class="far fa-trash-alt"></i>
                                    <span>clear filter</span>
                                </button>
                            </form>
                        </div>
                        <div class="shop-widget">
                            <h6 class="shop-widget-title">Filter by Brand</h6>
                            <form>
                                <input class="shop-widget-search" type="text" placeholder="Search...">
                                <ul class="shop-widget-list shop-widget-scroll">
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="brand1">
                                            <label for="brand1">mari gold</label> -->
                                            <select id="brand1" class="form-select form-select-lg">
                                                <option value="mari gold">mari gold</option>
                                            </select>
                                        </div>
                                        <span class="shop-widget-number">(13)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="brand2">
                                            <label for="brand2">tredar</label>-->
                                             <select id="brand1" class="form-select form-select-lg">
                                                <option value="tredar">tredar</option>
                                            </select> 
                                        </div>
                                        <span class="shop-widget-number">(28)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="brand3">
                                            <label for="brand3">keya</label> -->
                                            <select id="brand1" class="form-select form-select-lg">
                                                <option value="keya">keya</option>
                                            </select> 
                                        </div>
                                        <span class="shop-widget-number">(35)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="brand4">
                                            <label for="brand4">diamond</label> -->
                                            <select id="brand1" class="form-select form-select-lg">
                                                <option value="diamond">diamond</option>
                                            </select> 
                                        </div>
                                        <span class="shop-widget-number">(47)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="brand5">
                                            <label for="brand5">lilly's</label> -->
                                            <select id="brand1" class="form-select form-select-lg">
                                                <option value="lilly">lilly</option>
                                            </select>
                                        </div>
                                        <span class="shop-widget-number">(59)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <!-- <input type="checkbox" id="brand6">
                                            <label for="brand6">fremant</label> -->
                                            <select id="brand1" class="form-select form-select-lg">
                                                <option value="brand6">brand6</option>
                                            </select>
                                        </div>
                                        <span class="shop-widget-number">(64)</span>
                                    </li>
                                  
                                </ul>
                                <button class="shop-widget-btn">
                                    <i class="far fa-trash-alt"></i>
                                    <span>clear filter</span>
                                </button>
                            </form>
                        </div>
                        <div class="shop-widget">
                            <h6 class="shop-widget-title"> <select id="brand1" class="form-select form-select-lg">
                                <option value="new items">Filter by Tag</option>
                            </select></h6>
                            <form>
                                <ul class="shop-widget-list">
                                    <li>
                                        <div class="shop-widget-content">
                                            <input type="checkbox" id="tag1">
                                            <label for="tag1">new items</label>
                                        </div>
                                        <span class="shop-widget-number">(13)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <input type="checkbox" id="tag2">
                                            <label for="tag2">sale items</label>
                                        </div>
                                        <span class="shop-widget-number">(28)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <input type="checkbox" id="tag3">
                                            <label for="tag3">rating items</label>
                                        </div>
                                        <span class="shop-widget-number">(35)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <input type="checkbox" id="tag4">
                                            <label for="tag4">feature items</label>
                                        </div>
                                        <span class="shop-widget-number">(47)</span>
                                    </li>
                                    <li>
                                        <div class="shop-widget-content">
                                            <input type="checkbox" id="tag5">
                                            <label for="tag5">discount items</label>
                                        </div>
                                        <span class="shop-widget-number">(59)</span>
                                    </li>
                                </ul>
                                <button class="shop-widget-btn">
                                    <i class="far fa-trash-alt"></i>
                                    <span>clear filter</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="top-filter">
                                    <div class="filter-show">
                                        <label class="filter-label">Show :</label>
                                        <select class="form-select filter-select">
                                            <option value="1">12</option>
                                            <option value="2">24</option>
                                            <option value="3">36</option>
                                        </select>
                                    </div>
                                    <div class="filter-short">
                                        <label class="filter-label">Short by :</label>
                                        <select class="form-select filter-select">
                                            <option selected>Populartiy</option>
                                            <option value="3">New Items</option>
                                            <option value="1">Price High to Low</option>
                                            <option value="2">Price Low to High</option>
                                        </select>
                                    </div>
                                    <!-- <div class="filter-action">
                                        <a href="shop-3column.html" title="Three Column"><i class="fas fa-th"></i></a>
                                        <a href="shop-2column.html" title="Two Column"><i class="fas fa-th-large"></i></a>
                                        <a href="shop-1column.html" title="One Column"><i class="fas fa-th-list"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4">
                        <?php 

                                 
                            $sql="select * from  tbl_products where PRODN08='Active'";
                            $result=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($result)){
                                // $image='/admin/masters/product_uploads/."'.$row['PRODN07'].'"';
                                $image='./admin/masters/prod_uploads/'.$row["PRODN07"];
                                $price=$row['PRODN06'];
                                $product_name=$row['PRODN01'];
                                $product_id=$row['PRODTID'];

                            echo '<div class="col">
                                    <div class="product-card">
                                        <div class="product-media">
                                            <div class="product-label">
                                                <label class="label-text new">new</label>
                                            </div>
                                            <button class="product-wish wish">
                                                <i class="fas fa-heart"></i>
                                            </button>
                                            <a class="product-image" href="product-video.html">
                                                <img src="'.$image.'" alt="product">
                                            </a>
                                            
                                        </div>
                                        <div class="product-content">
                                            <div class="product-rating">
                                                <i class="active icofont-star"></i>
                                                <i class="active icofont-star"></i>
                                                <i class="active icofont-star"></i>
                                                <i class="active icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <a href="product-tab.html">(3)</a>
                                            </div>
                                            <h6 class="product-name">
                                                <a href="product-tab.html">'.$product_name.'</a>
                                            </h6>
                                            <h6 class="product-price">
                                                <span>$'.$price.'<small>/piece</small></span>
                                            </h6>
                                            <button class="product-add" title="Add to Cart">
                                                <i class="fas fa-shopping-basket"></i>
                                                <span title="Product View" href="#" class="add_cart" data-bs-toggle="modal" data-id='.$product_id.' data-bs-target="#product-view">add cart</span>
                                             </button>
                                            <div class="product-action">
                                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }

                            ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bottom-paginate">
                                    <p class="page-info">Showing 12 of 60 Results</p>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="fas fa-long-arrow-alt-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">...</li>
                                        <li class="page-item"><a class="page-link" href="#">60</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    SHOP PART END
        =======================================-->
        

        <!--=====================================
                    NEWSLETTER PART START
        =======================================-->
        <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 col-xl-7">
                        <div class="news-text">
                            <h2>Get 20% Discount for Subscriber</h2>
                            <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <form class="news-form">
                            <input type="text" placeholder="Enter Your Email Address">
                            <button><span><i class="icofont-ui-email"></i>Subscribe</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    NEWSLETTER PART END
        =======================================-->


        <!--=====================================
                    INTRO PART START
        =======================================-->
        <section class="intro-part">
            <div class="container">
                <div class="row intro-content">
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="intro-content">
                                <h5>free home delivery</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <div class="intro-content">
                                <h5>instant return policy</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="intro-content">
                                <h5>quick support system</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="intro-content">
                                <h5>secure payment way</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    INTRO PART END
        =======================================-->


        <!--=====================================
                     FOOTER PART START
        =======================================-->
        <footer class="footer-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <a class="footer-logo" href="#">
                                <img src="images/logo.png" alt="logo">
                            </a>
                            <p class="footer-desc">Adipisci asperiores ipsum ipsa repellat consequatur repudiandae quisquam assumenda dolor sitt perspiciatis Lorem amet.</p>
                            <ul class="footer-social">
                                <li><a class="icofont-facebook" href="#"></a></li>
                                <li><a class="icofont-twitter" href="#"></a></li>
                                <li><a class="icofont-linkedin" href="#"></a></li>
                                <li><a class="icofont-instagram" href="#"></a></li>
                                <li><a class="icofont-pinterest" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget contact">
                            <h3 class="footer-title">contact us</h3>
                            <ul class="footer-contact">
                                <li>
                                    <i class="icofont-ui-email"></i>
                                    <p>
                                        <span>support@greeny.com</span>
                                        <span>carrer@greeny.com</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-ui-touch-phone"></i>
                                    <p>
                                        <span>+120 279 532 13</span>
                                        <span>+120 279 532 14</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <p>1Hd- 50, 010 Avenue, NY 90001 United States</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">quick Links</h3>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Best Seller</a></li>
                                    <li><a href="#">New Arrivals</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Location</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Carrer</a></li>
                                    <li><a href="#">Faq</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">Download App</h3>
                            <p class="footer-desc">Lorem ipsum dolor sit amet tenetur dignissimos ipsum eligendi autem obcaecati minus ducimus totam reprehenderit exercitationem!</p>
                            <div class="footer-app">
                                <a href="#"><img src="images/google-store.png" alt="google"></a>
                                <a href="#"><img src="images/app-store.png" alt="app"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom">
                            <p class="footer-copytext">&copy;  All Copyrights Reserved by <a target="_blank" href="https://themeforest.net/user/mironcoder">Mironcoder</a></p>
                            <div class="footer-card">
                                <a href="#"><img src="images/payment/jpg/01.jpg" alt="payment"></a>
                                <a href="#"><img src="images/payment/jpg/02.jpg" alt="payment"></a>
                                <a href="#"><img src="images/payment/jpg/03.jpg" alt="payment"></a>
                                <a href="#"><img src="images/payment/jpg/04.jpg" alt="payment"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--=====================================
                      FOOTER PART END
        =======================================-->
        

        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <!-- VENDOR -->
        <script src="vendor/bootstrap/jquery-1.12.4.min.js"></script>
        <script src="vendor/bootstrap/popper.min.js"></script>
        <script src="vendor/bootstrap/bootstrap.min.js"></script>
        <script src="vendor/countdown/countdown.min.js"></script>
        <script src="vendor/niceselect/nice-select.min.js"></script>
        <script src="vendor/slickslider/slick.min.js"></script>
        <script src="vendor/venobox/venobox.min.js"></script>

        <!-- CUSTOM -->
        <script src="js/nice-select.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/accordion.js"></script>
        <script src="js/venobox.js"></script>
        <script src="js/slick.js"></script>
        <script src="js/main.js"></script> 
        <!--=====================================
                    JS LINK PART END
        =======================================-->
        <script>

            $(document).ready(function(){
                $(".add_cart").click(function(){
                    var product_id =$(this).data('id');
                    var user_id=$("#user_id").val();
                    $.ajax({
                        url:"ajax.php",
                        method:"post",
                        data:{'product_view':'product_view',product_id:product_id,user_id:user_id},
                        success:function(response){
                            $(".product-view").html(response);
                            $("#modal-content").modal('show'); 
                        }
                    })
                })
            })
    </script>

    </body>
</html>
