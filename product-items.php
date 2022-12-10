

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
                        <!-- <div class="shop-widget-promo">
                            <a href="#"><img src="images/promo/shop/01.jpg" alt="promo"></a>
                        </div> -->
                        <div class="shop-widget">
                            <h6 class="shop-widget-title">Filter by Price</h6>
                                <div class="shop-widget-group">
                                    <input type="number" placeholder="Min - 00" id="min_price">
                                    <input type="number" placeholder="Max - 5k" id="max_price">
                                </div>
                                <button class="shop-widget-btn" id="common_selector">
                                    <i class="fas fa-search"></i>
                                    <span>search</span>
                                </button>
                        </div>
                        <div class="shop-widget">
                            <h6 class="shop-widget-title">Filter by Rating</h6>
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
                        </div>
                        <div class="shop-widget">
                            <h6 class="shop-widget-title">Filter by Category</h6>
                            <select id="filter_category"  onchange="filter_category()" class="form-select form-select-lg">
                                <?php 
                                    $sql="select * from tbl_category where CATEG02='Active'";
                                    $result=mysqli_query($con,$sql);
                                    echo "<option value=''>Filter Category</option>";
                                    while($row=mysqli_fetch_array($result)){
                                        echo "<option value=".$row['CATEGTID'].">".$row['CATEG01']."</option>";
                                    }
                                ?>
                            </select>

                                <button class="shop-widget-btn" >
                                    <i class="far fa-trash-alt"></i>
                                    <span>clear filter</span>
                                </button>
                        </div>
                        <div class="shop-widget">
                            <h6 class="shop-widget-title">Filter by Brand</h6>
                            <select id="filter_brand" onchange="filter_brand()"  class="form-select form-select-lg">
                                <?php 
                                    $sql="select * from tbl_brands where BRAND02='Active'";
                                    $result=mysqli_query($con,$sql);
                                    echo "<option value=''>Filter Brand</option>";
                                    while($row=mysqli_fetch_array($result)){
                                        echo "<option value=".$row['BRANDTID'].">".$row['BRAND01']."</option>";
                                    }
                                ?>
                            </select>
                                <button class="shop-widget-btn">
                                    <i class="far fa-trash-alt"></i>
                                    <span>clear filter</span>
                                </button>
                        </div>
                        <div class="shop-widget">
                            <h6 class="shop-widget-title">Filter by Tag</h6>
                            <select id="filter_tag" onchange="filter_tag()"  class="form-select form-select-lg">
                                <?php 
                                    // $sql="select * from tbl_category where CATEG02='Active'";
                                    // $result=mysqli_query($con,$sql);
                                    // echo "<option value=''>Filter category</option>";
                                    // while($row=mysqli_fetch_array($result)){
                                    //     echo "<option value=".$row['CATEGTID'].">".$row['CATEG01']."</option>";
                                    // }
                                ?>
                            </select>
                                <button class="shop-widget-btn">
                                    <i class="far fa-trash-alt"></i>
                                    <span>clear filter</span>
                                </button>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="top-filter">
                                    
                                    <div class="filter-short">
                                        <label class="filter-label">Short by :</label>
                                        <select class="form-select filter-select" id="short_by_filter" onchange="short_by_filter()">
                                            <option value="4">Populartiy</option>
                                            <option value="3">New Items</option>
                                            <option value="price_high_to_low">Price High to Low</option>
                                            <option value="price_low_to_high">Price Low to High</option>
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
                            <div class="filter_data"></div>
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

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        
        
        <!--=====================================
                    JS LINK PART END
        =======================================-->
        <script>
            
            $(document).ready(function(){
                $("#filter_category").select2();
            })
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


          
                
                function filter_data()
                {
                  
                    // $('.filter_data').html('<div id="loading" style="" ></div>');
                    var maximum_price=$("#max_price").val();
                    var minimum_price=$("#min_price").val();
                    var filter_category=$("#filter_category").val();
                    var filter_brand=$("#filter_brand").val();
                    var short_by_filter=$("#short_by_filter").val();
                   

                    $.ajax({
                        url:"fetch_data_ajax.php",
                        method:"POST",
                        data:{'action':'action', minimum_price:minimum_price, maximum_price:maximum_price,filter_brand:filter_brand,filter_category:filter_category,short_by_filter:short_by_filter},
                        success:function(data){
                            $('.filter_data').html(data);
                           
                        }
                    });
                }

                $('#common_selector').click(function(){
                    filter_data();
                });

                function filter_category(){
                    
                    filter_data();
                }
                function filter_brand(){
                    filter_data();
                }
                function short_by_filter(){
                    filter_data();
                }
                
                $(document).ready(function(){
                    filter_data();
                });

              
         
           
            
    </script>

    </body>
</html>
