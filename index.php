
    <?php include('header.php');

   
error_reporting(0);

echo '<input type="hidden" id="user_id" value="'.$_SESSION['user_id'].'">';



?>
   
    <!--=====================================
            CATEGORY SIDEBAR PART END
    =======================================-->
    <?php include('cart.php');?>

  

    <?php include ('productview.php');?>


    <!--=====================================
                SUGGEST PART START
    =======================================-->
    <section class="suggest-part">
        <div class="container">
            <ul class="suggest-slider slider-arrow">
                <?php 
                    $sql="select * from tbl_category where CATEG02='Active'";
                    $result = mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result)){
                        $sqlx="select count(*) as items from tbl_products  where PRODN10='".$row['CATEGTID']."' ";
                        $resultx = mysqli_query($con,$sqlx);
                        $rowx=mysqli_fetch_array($resultx);
                        $items=$rowx['items']; 

                        

                        $image='./admin//masters/category_uploads/'.$row["CATEG03"];
                        echo '<li>
                                <a class="suggest-card" href="product-items.php">
                                    <img src="'.$image.'" alt="suggest">
                                    <h5>'.$row['CATEG01'].' <span>'.$items.' items</span></h5>
                                </a>
                            </li>';
                    }
                ?>
                
                <!-- <li>
                    <a class="suggest-card" href="shop-4column.html">
                        <img src="images/suggest/Clothing.png" alt="suggest">
                        <h5>fruits <span>89 items</span></h5>
                    </a>
                </li>-->
            </ul>
        </div>
    </section>
    <!--=====================================
                SUGGEST PART END
    =======================================-->


    <!--=====================================
                BANNER PART START
    =======================================-->
    <!-- <div class="banner-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="home-category-slider slider-arrow slider-dots">
                        <a href="#"><img src="images/home/category/01.jpg" alt="banner"></a>
                        <a href="#"><img src="images/home/category/02.jpg" alt="banner"></a>
                        <a href="#"><img src="images/home/category/03.jpg" alt="banner"></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--=====================================
                BANNER PART END
    =======================================-->

<!--=====================================
                BANNER PART START
    =======================================-->
    <section class="home-index-slider slider-arrow slider-dots">
        <div class="banner-part banner-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content">
                            <h1> Experience India’s Finest: Delivered to Your Doorstep in the USA.</h1>
                            <p>We deliver finest goods from our production houses and partner brands with the highest quality and craftsmanship.</p>
                            <div class="banner-btn">
                                <a class="btn btn-inline bt-lg" href="product-items.php">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>shop now</span>
                                </a>
                                <a class="btn btn-outline bt-lg" href="offer.php">
                                    <i class="icofont-sale-discount"></i>
                                    <span>get offer</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img">
                            <img src="images/home/category/3.png" alt="index">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-part banner-2 bann">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img">
                            <img src="images/home/category/4.png" alt="index">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content">
                            <h1>Bringing the Real Taste of India – directly from India to Your Home!</h1>
                            <p>Experience the unique flavours of Indian spices and aromas from Kashmiri saffron to cardamom and every other spice in between.</p>
                            <div class="banner-btn">
                                <a class="btn btn-inline" href="product-items.php">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>shop now</span>
                                </a>
                                <a class="btn btn-outline" href="#">
                                    <i class="icofont-sale-discount"></i>
                                    <span>get offer</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-part banner-2 bann">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img">
                            <img src="images/home/category/58.png" alt="index">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content">
                            <h1>Request your favourite product from India and get it delivered in your doorstep.</h1>
                            <p>We provide a comprehensive and reliable service to get your products from India to your destination of choice</p>
                            <div class="banner-btn">
                                <a class="btn btn-inline" href="product-items.php">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>shop now</span>
                                </a>
                                <a class="btn btn-outline" href="#">
                                    <i class="icofont-sale-discount"></i>
                                    <span>get offer</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-part banner-1 ban">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content">
                            <h1>Delivering India’s Spirit Devotional and Festival Items to Your Home.</h1>
                            <p>It’s a joy to us to bring the festival and devotional items to you we have many options from trinkets to statues, there is something for everyone.</p>
                            <div class="banner-btn">
                                <a class="btn btn-inline" href="product-items.php">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>shop now</span>
                                </a>
                                <a class="btn btn-outline" href="#">
                                    <i class="icofont-sale-discount"></i>
                                    <span>get offer</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img">
                            <img src="images/home/category/5.png" alt="index">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                BANNER PART END
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
                        <img src="./images/top/1_doorstep_delivery.gif" >
                        </div>
                        <div class="intro-content">
                            <h5>Doorstep Delivery </h5>
                            <p>Goodness Delivered Right to Your Doorstep!.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon">
                            <!-- <i class="fas fa-sync-alt"></i> -->
                            <img src="./images/top/2_easyrefund.gif" >

                           
                        </div>
                        <div class="intro-content">
                            <h5>Instant Refund Policy</h5>
                            <p>We Make Returns Easy - Get Your Money Back Instantly!.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon">
                            <!-- <i class="fas fa-headset"></i> -->
                            <img src="./images/top/3_Support _System.gif" >
                        </div>
                        <div class="intro-content">
                            <h5>quick support system</h5>
                            <p>Get Help You Need, Fast with Quick Support System!.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon">
                            <!-- <i class="fas fa-lock"></i> -->
                            <img src="./images/top/4_secure_payment.gif" >
                        </div>
                        <div class="intro-content">
                            <h5>Secure Payment Gateways</h5>
                            <p>Pay for your Favourite Products Securely .</p>
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
                NEW ITEM PART START
    =======================================-->
    <section class="section newitem-part">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-heading">
                        <h2 style="margin-top: 2rem">Added new items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="new-slider slider-arrow">
                       
                            <?php 

                                $sqlx="select * from tbl_currency where currency_name='".$_SESSION['currency']."'";
                                $resultx=mysqli_query($con,$sqlx);
                                $rowx=mysqli_fetch_array($resultx);
                                $exchange_rate=$rowx['exchange_rate'];


                                $sql="select * from  tbl_products where PRODN08='Active'";
                                $result=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_array($result)){
                                    $image='./admin/masters/prod_uploads/'.$row["PRODN07"];
                                   
                                    $product_name=$row['PRODN01'];
                                    $product_id=$row['PRODTID'];
                                    $rating=$row['PRODN11'];
                                    
                                    $price = $row['PRODN06'];
                                    $symbol="₹";
                                  
                                   if($_SESSION['currency']=="USD"){
                                        
                                       $price = round(($row['PRODN06']*$exchange_rate), 2);
                                        $symbol="$";

                                    }else if($_SESSION['currency']=="Pound"){
                                        $price = round(($row['PRODN06']*$exchange_rate), 2);
                                        $symbol="£";
                                    }



                                    $sqlx="select * from tbl_wishlist where fk_product_id='".$product_id."' and fk_user_id='".$_SESSION['user_id']."' and status='Active'";
                                  
                                    $resultx=mysqli_query($con,$sqlx);
                                    $rowx=mysqli_fetch_array($resultx);
                                    $wishlist_id=$rowx['wishlist_id'];
                                   
                                    if($wishlist_id>0){
                                        $status="active";

                                    }else{
                                        $status="";

                                    }


                                    

                           echo     '<li>
                                        <div class="product-card">
                                            <div class="product-media">
                                                <div class="product-label">
                                                    <label class="label-text new">new</label>
                                                </div>
                                                <button class="product-wish  '.$status.'"  value='.$product_id.'>
                                                   <i class="fas fa-heart"> </i>
                                                   
                                                </button>
                                              
                                                <a class="product-image" href="product-tab.php?id='.$product_id.'">
                                                    <img src='.$image.' alt="product">
                                                </a>
                                               
                                            </div>
                                            <div class="product-content">
                                                <div class="product-rating">';

                                                for ($i = 1; $i <= 5; $i++) {
                                                   
                                                    if($i <= $rating) {
                                                        echo   '<i class="active icofont-star"></i>';
                                                    }else{
                                                        echo   '<i class=" icofont-star"></i>';
                                                    }
                                            }
                                            
                                                   
                                                echo '<a href="product-tab.php">('.$rating.')</a>
                                                </div>
                                                <h6 class="product-name">
                                                    <a href="product-tab.php?id='.$product_id.'">'.$product_name.'</a>
                                                </h6>
                                                <h6 class="product-price">
                                                    <span>'.$symbol.''.$price.'<small>/price</small></span>
                                                </h6>';
                                        echo    '<button class="product-add" title="Add to Cart">
                                                    <i class="fas fa-shopping-basket"></i>
                                                    <span title="Product View" href="#" class="add_cart" onclick="add_cart('.$product_id.')" data-bs-toggle="modal" data-id='.$product_id.' data-bs-target="#product-view">add cart</span>
                                                </button>';
                                    echo    '</div>
                                        </div>
                                    </li>';
                                } 
                            ?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="section-btn-25">
                        <a href="product-items.php" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>show more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--=====================================
                NEW ITEM PART END
    =======================================-->




      <!--=====================================
                PROMOTION PART START
    =======================================-->
    <div class="section promo-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-img">
                        <a href="offer.php"><img src="./admin/masters/banner_uploads/banner2.png" alt="promo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================
                PROMOTION PART END
    =======================================-->

    <!--=====================================
                PROMOTION PART START
    =======================================-->
    <!-- <div class="section promo-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                    <div class="promo-img">
                        <a href=""><img src="images/promo/home/01.jpg" alt="promo"></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                    <div class="promo-img">
                        <a href=""><img src="images/promo/home/02.jpg" alt="promo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--=====================================
                PROMOTION PART END
    =======================================-->


    <!--=====================================
                NICHE PART START
    =======================================-->
    <section class="section niche-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Browse by Top Niche</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="#top-order" class="tab-link active" id="btn" data-bs-toggle="tab" onClick="filterSelection('top_order')" >
                                <i class="icofont-price"></i>
                                <span>top order</span>
                            </a>
                        </li>
                        <li>
                            <a href="#top-rate" class="tab-link" data-bs-toggle="tab"  onClick="filterSelection('top_rating')">
                                <i class="icofont-star"></i>
                                <span>top rating</span>
                            </a>
                        </li>
                        <li>
                            <a href="#top-disc" class="tab-link" data-bs-toggle="tab" onClick="filterSelection('top_discount')">
                                <i class="icofont-sale-discount"></i>
                                <span>top discount</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade show active" >
                <div id="top_browse_view"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25">
                        <a href="product-items.php" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>show more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                NICHE PART END
    =======================================-->


    <!--=====================================
                BRAND PART START
    =======================================-->
    <section class="section brand-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Why Choose Delights Hub</h2>
                    </div>
                </div>
            </div>
            <div class="brand-slider slider-arrow">
                <div class="brand-wrap">
                    <div class="brand-media">
                    <img src="./images/choose/truck-delivery-flat.gif">
                        <div class="brand-overlay">
                            <!-- <a href="#"><i class="fas fa-link"></i></a> -->
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>7 day fast-shipping</h4>
                        
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                    <img src="./images/choose/Doorstepdelivery.gif" >
                        <div class="brand-overlay">
                            <!-- <a href="brand-single.html"><i class="fas fa-link"></i></a> -->
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>Door Step Delivery</h4>
                        
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                    <img src="./images/choose/237-star-indian finest products.gif" >
                        <div class="brand-overlay">
                            <!-- <a href="brand-single.html"><i class="fas fa-link"></i></a> -->
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>Finest Indian Products</h4>
                        
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                    <img src="./images/choose/Easy_Custom _Clearance.gif" >
                        <div class="brand-overlay">
                            <!-- <a href="brand-single.html"><i class="fas fa-link"></i></a> -->
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>Easy Custom Clearance</h4>
                       
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                    <img src="./images/choose/Low cost shipping.gif" >
                        <div class="brand-overlay">
                            <!-- <a href="brand-single.html"><i class="fas fa-link"></i></a> -->
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>Low Cost Shipping</h4>
                        
                    </div>
                </div>
                <!-- <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="./admin/masters/brand_uploads/Low-cost shipping.svg" alt="brand">
                        <div class="brand-overlay">
                            <a href="brand-single.html"><i class="fas fa-link"></i></a> 
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>Low cost shipping</h4>
                        
                    </div>
                </div> -->
            </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-50">
                        <a href="brand-list.html" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>view all brands</span>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!--=====================================
                BRAND PART END
    =======================================-->


    <!--=====================================
              TESTIMONIAL PART START
    =======================================-->
    <section class="section testimonial-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>client's feedback</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider slider-arrow">
                        <div class="testimonial-card">
                            <i class="fas fa-quote-left"></i>
                            <p>"I have been using this delivery site for a while and it has been amazing! The deliveries are always on time and I never have to worry about them getting lost. Highly recommend!". </p>
                            <h5>Sean W</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul>
                            <img src="New/Rectangle 2.png" alt="testimonial">
                        </div>
                        <div class="testimonial-card">
                            <i class="fas fa-quote-left"></i>
                            <p>"I love Delights Hub! They offer a wide range of products and it's so easy to order. The delivery times are always reliable and I never have any issues. Great service!" </p>
                            <h5>Mary S.</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul>
                            <img src="New/Rectangle 1.png" alt="testimonial">
                        </div>
                        <div class="testimonial-card">
                            <i class="fas fa-quote-left"></i>
                            <p>"I have been using this delivery site for some time now and I have never had any problems. The customer service is always helpful and my orders always arrive on time. Would definitely recommend!" .</p>
                            <h5>John K</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul>
                            <img src="New/Rectangle 3.png" alt="testimonial">
                        </div>
                        <div class="testimonial-card">
                            <i class="fas fa-quote-left"></i>
                           <p>"I have been using this delivery site for some time now and I have never had any problems. The customer service is always helpful and my orders always arrive on time. Would definitely recommend!" .</p>
                            <h5>John K</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul>
                            <img src="New/Rectangle 3.png" alt="testimonial">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
               TESTIMONIAL PART END
    =======================================-->


    <!--=====================================
                  BLOG PART START
    =======================================-->
    <section class="section blog-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Read our articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-slider slider-arrow">
                        <?php
                            $sql="select * from tbl_blogs where status='Active'";
                            $result=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($result)){
                                $bloag_image='./admin/masters/blog_uploads/'.$row["blog_image"];
                               echo '<div class="blog-card">
                                        <div class="blog-media">
                                            <a class="blog-img" href="#">
                                                <img src="'.$bloag_image.'" alt="blog">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <ul class="blog-meta">
                                                <li>
                                                    <i class="fas fa-user"></i>
                                                    <span>admin</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span>'.$row['blog_date'].'</span>
                                                </li>
                                            </ul>
                                            <h4 class="blog-title">
                                                <a href="blog-details.html">'.$row['blog_name'].'</a>
                                            </h4>
                                            <p class="blog-desc">'.$row['blog_decs'].'</p>
                                            <a class="blog-btn" href="#">
                                                <span>read more</span>
                                                <i class="icofont-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>';
                            }
                                
                        ?>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25">
                        <a href="blog-grid.php" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>view all blog</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                  BLOG PART END
    =======================================-->


    <!--=====================================
                NEWSLETTER PART START
    =======================================-->
    <!-- <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
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
    </section> -->
    <!--=====================================
                NEWSLETTER PART END
    =======================================-->


    

    <?php  include ('footer.php');?>

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

      

      
        function add_cart(product_id){
        
            // var product_id =$(this).data('id');
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
        }
        //Brwose by top Rating/Reviews/Discount
        function filterSelection(value) {

            $.ajax({
                url:"ajax.php",
                method:"post",
                data:{'top_browrse_products':'top_browrse_products',top_browse:value},
                success:function(response){
                    $("#top_browse_view").html(response);
                }
            })
        }
        
        $(document).ready(function(){
            $('#btn').trigger('click');
        });
      

          $(document).ready(function(){
            $(".product-wish").click(function(){
                
                var user_id=$("#user_id").val();
                var product_id= $(this).val();
               
                if(user_id>0){
                    $.ajax({
                        url:"ajax.php",
                        method:"POST",
                        data:{'add_wishlist':'add_wishlist',user_id:user_id,product_id:product_id},
                        success:function(response){
                            var data = jQuery.parseJSON(response);
                            if(data.value=="index"){
                                window.location.href="index.php";
                            }else if(data.value=="wishlist"){
                                window.location.href="wishlist.php";
                            }
                           
                        }
                     });
                }else{
                    alert("Please login!");
                }
                
            });
        });

        function view_wish(product_id){
                var user_id=$("#user_id").val();
                if(user_id>0){
                $.ajax({
                    url:"ajax.php",
                    method:"POST",
                    data:{'add_wishlist':'add_wishlist',user_id:user_id,product_id:product_id},
                    success:function(response){
                        var data = jQuery.parseJSON(response);
                        if(data.value=="index"){
                            window.location.href="index.php";
                        }else if(data.value=="wishlist"){
                            window.location.href="wishlist.php";
                        }
                        
                    }
                    });
                }else{
                alert("Please login!");
                }   
            }
        

      
        

    </script>

</body>
</html>






