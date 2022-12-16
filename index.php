
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
                                <a class="btn btn-inline" href="shop-4column.html">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>shop now</span>
                                </a>
                                <a class="btn btn-outline" href="offer.html">
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
                                <a class="btn btn-inline" href="shop-4column.html">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>shop now</span>
                                </a>
                                <a class="btn btn-outline" href="offer.html">
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
                            <i class="fas fa-truck"></i>
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
                            <i class="fas fa-sync-alt"></i>
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
                            <i class="fas fa-headset"></i>
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
                            <i class="fas fa-lock"></i>
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
                                $sql="select * from  tbl_products where PRODN08='Active'";
                                $result=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_array($result)){
                                    $image='./admin/masters/prod_uploads/'.$row["PRODN07"];
                                    $price=$row['PRODN06'];
                                    $product_name=$row['PRODN01'];
                                    $product_id=$row['PRODTID'];
                                    $rating=$row['PRODN11'];

                                    $sqlx="select * from tbl_wishlist where fk_product_id='".$product_id."' and status='Active'";
                                  
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
                                                <a class="product-image" href="wishlist.php?id='.$product_id.'">
                                                <button class="product-wish  '.$status.'"  value='.$product_id.'>
                                                   <i class="fas fa-heart"> </i>
                                                   
                                                </button>
                                                </a>
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
                                                    <span>$'.$price.'<small>/piece</small></span>
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
                        <img src="./admin/masters/brand_uploads/7 day fast-shipping.svg" alt="brand">
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
                        <img src="./admin/masters/brand_uploads/door_step_delivery.svg" alt="brand">
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
                        <img src="./admin/masters/brand_uploads/Finest Indian Products.svg" alt="brand">
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
                        <img src="./admin/masters/brand_uploads/Hassle_Custom.svg" alt="brand">
                        <div class="brand-overlay">
                            <!-- <a href="brand-single.html"><i class="fas fa-link"></i></a> -->
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>Hassle Custom</h4>
                       
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="./admin/masters/brand_uploads/Request_product_now.svg" alt="brand">
                        <div class="brand-overlay">
                            <!-- <a href="brand-single.html"><i class="fas fa-link"></i></a> -->
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>Request Product Now</h4>
                        
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="./admin/masters/brand_uploads/Low-cost shipping.svg" alt="brand">
                        <div class="brand-overlay">
                            <!-- <a href="brand-single.html"><i class="fas fa-link"></i></a> -->
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>Low cost shipping</h4>
                        
                    </div>
                </div>
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
                        <div class="blog-card">
                            <div class="blog-media">
                                <a class="blog-img" href="#">
                                    <img src="New/Indian_Sweets.png" alt="blog">
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
                                        <span>february 02, 2021</span>
                                    </li>
                                </ul>
                                <h4 class="blog-title">
                                    <a href="blog-details.html">The Sweet Delights of India: Exploring the World of Indian Sweets </a>
                                </h4>
                                <p class="blog-desc">
                                India is a land of sweet delicacies. Indian sweets are known for their rich flavours and exotic ingredients. They are not just desserts, but an integral part of festivals, celebrations, and special occasions.
                                Indian sweets are usually made with sugar, milk, ghee, cream, and nuts like almonds, cashews, and pistachios....
                                </p>
                                <a class="blog-btn" href="#">
                                    <span>read more</span>
                                    <i class="icofont-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-media">
                                <a class="blog-img" href="#">
                                    <img src="New/Indian_Spices.png" alt="blog">
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
                                        <span>february 02, 2021</span>
                                    </li>
                                </ul>
                                <h4 class="blog-title">
                                    <a href="blog-details.html">Exploring the Rich Tastes and Fragrances of Indian Spices</a>
                                </h4>
                                <p class="blog-desc">
                                The Indian subcontinent is renowned for its exotic spices, which have been used to create unique and flavorful dishes for centuries. From the hot, spicy flavours of chili peppers to the sweet and fragrant aromas of cardamom and cinnamon, Indian spices bring a distinct flavour to any dish. ...
                                </p>
                                <a class="blog-btn" href="#">
                                    <span>read more</span>
                                    <i class="icofont-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-media">
                                <a class="blog-img" href="#">
                                    <img src="New/Indian_Dressing_Styles.png" alt="blog">
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
                                        <span>february 02, 2021</span>
                                    </li>
                                </ul>
                                <h4 class="blog-title">
                                    <a href="blog-details.html">The Timeless Charm of Indian Dressing Styles</a>
                                </h4>
                                <p class="blog-desc">
                                The traditional Indian dress is an integral part of Indian culture and is steeped in history. It is seen as a way of expressing the Indian identity and the culture of the country. The traditional Indian dress has evolved over centuries and is a reflection of the changing times....
                                </p>
                                <a class="blog-btn" href="#">
                                    <span>read more</span>
                                    <i class="icofont-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-media">
                                <a class="blog-img" href="#">
                                    <img src="New/Indian_Spices.png" alt="blog">
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
                                        <span>february 02, 2021</span>
                                    </li>
                                </ul>
                                <h4 class="blog-title">
                                    <a href="blog-details.html">Exploring the Rich Tastes and Fragrances of Indian Spices</a>
                                </h4>
                                <p class="blog-desc">
                                The Indian subcontinent is renowned for its exotic spices, which have been used to create unique and flavorful dishes for centuries. From the hot, spicy flavours of chili peppers to the sweet and fragrant aromas of cardamom and cinnamon, Indian spices bring a distinct flavour to any dish. ...
                                </p>
                                <a class="blog-btn" href="#">
                                    <span>read more</span>
                                    <i class="icofont-arrow-right"></i>
                                </a>
                            </div>
                        </div>
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
               
                // alert(user_id);
                // alert(product_id);
                $.ajax({
                    url:"ajax.php",
                    method:"POST",
                    data:{'add_wishlist':'add_wishlist',user_id:user_id,product_id:product_id},
                    success:function(response){
                       window.location.href="wishlist.php";
                    }
                });
            });
        });
        

      
        

    </script>

</body>
</html>






