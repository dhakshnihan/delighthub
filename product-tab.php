<!--  -->
  
   
<?php include('header.php');?>
    <?php include('cart.php');?>
    <?php include ('productview.php');?>
    <?php     error_reporting(0);

echo '<input type="hidden" id="user_id" value="'.$_SESSION['user_id'].'">';

?>
        
        <script src="productscript.js"></script>
            
        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="single-banner inner-section" style="background: url(images/single-banner.jpg) no-repeat center;">
            <div class="container">
                <h2>product details</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="product-items.php">Product-items</a></li>
                    <li class="breadcrumb-item active" aria-current="page">product-details</li>
                </ol>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                PRODUCT DETAILS PART START
        =======================================-->
        <section class="inner-section">
            <div class="container">
               

            <?php 
            
                 $id = $_GET['id'];
                                 
                $sql="select * from  tbl_products LEFT JOIN   tbl_brands ON BRANDTID = PRODN03  left join tbl_category on PRODN10=CATEGTID where PRODN08='Active' and PRODTID= '$id'";
                // echo $sql;
                
                $result=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($result)){
                    // $image='/admin/masters/product_uploads/."'.$row['PRODN07'].'"';
                    $image='./admin/masters/prod_uploads/'.$row["PRODN07"];
                    $price=$row['PRODN06'];
                    $product_name=$row['PRODN01'];
                    $brand=$row['BRAND01'];
                     $product_id=$row['PRODTID'];
                     $uom=$row['CATEG04'];
                   $PRODN05=$row['PRODN05'];
                   $rating=$row['PRODN11'];

                   $sqlx="select * from tbl_cart where fk_product='".$_GET['id']."'";
                   $resultx=mysqli_query($con,$sqlx);
                   $already_cart=mysqli_num_rows($resultx);


                   $sqlxx="select * from tbl_wishlist where fk_product_id='".$product_id."' and fk_user_id='".$_SESSION['user_id']."' and status='Active'";
                                  
                   $resultxx=mysqli_query($con,$sqlxx);
                   $rowxx=mysqli_fetch_array($resultxx);
                   $wishlist_id=$rowxx['wishlist_id'];
                  
                   if($wishlist_id>0){
                       $status="active";

                   }else{
                       $status="";

                   }

                   

              
             echo'
                <div class="row">
                    <div class="col-lg-6">
                        <div class="details-gallery">
                            <div class="details-label-group">
                                <label class="details-label new">new</label>
                                <label class="details-label off">-10%</label>
                            </div>
                            <ul class="details-preview"> 
                                <li><img src='.$image.' alt="product"></li>
                                <li><img src='.$image.' alt="product"></li>
                                <li><img src='.$image.' alt="product"></li>
                               
                            </ul>
                            <ul class="details-thumb">
                                <li><img src='.$image.' alt="product"></li>
                                <li><img src='.$image.' alt="product"></li>
                                <li><img src='.$image.' alt="product"></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        
                        <div class="details-content">
                            <h3 class="details-name"><a href="#">'.$product_name.'</a></h3>
                            <div class="details-meta">
                                <p>Product Code:<span>'. $product_id.'</span></p>
                            </div>
                            <div class="details-rating">';
                            for ($i = 1; $i <= 5; $i++) {
                                                           
                                if($i <= $rating) {
                                    echo '<i class="active icofont-star"></i>';
                                }else{
                                    echo '<i class=" icofont-star"></i>';
                                }
                            }
                                
                         echo '<a href="">('.$rating.')</a>
                            </div>
                            <h3 class="details-price">
                                <del>$380.00</del>
                                <span id="pricekg" >'.$price.'<small>/per kilo</small></span>
                            </h3>
                            <p id="weight_value">Weight: 1 kg</p>
                            <span id="uom_input_value"><input  title="UOM" type="hidden" id="uom" name="uom" value="1"></span>
                            <span id="total_input_price"><input  title="Final Quantity" type="hidden" id="quantity" name="quantity" value="'.$price.'"></span>
                            <span id="total_input_hidden_price"><input  title="Quantity Number" type="hidden" id="quantity_hidden" name="quantity_hidden" value="'.$price.'"></span>
                            <div class="view-list-group">
                                    
                                    <ul class="view-tag-list">
                                    <li><button type="button" class="btn btn-outline-success " value="0.25" id="myfunction_weight_value1" onclick="myfunction_weight_value1(0.25)">0.25 KG</button></li>
                                    <li><button type="button" class="btn btn-outline-success " value="0.50" id="myfunction_weight_value2" onclick="myfunction_weight_value2(0.50)">0.50 KG</button></li>
                                    <li><button type="button" class="btn btn-outline-success " value="1" id="myfunction_weight_value3" onclick="myfunction_weight_value3(1)">1 KG</button></li>
                                    </ul>
                                    
                                </div>
                                <span id="total_price" class="total_price" style="color:red"> Rs:'.$price.' (Inclusive Of Tax)</span>
                                <div class="cart-action-group">
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus" onclick="decrementValue()" value="-"><i class="icofont-minus"></i></button>
                                            <input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id="number" />
                                            <button class="action-plus" title="Quantity Plus" onclick="incrementValue()" value="+"><i class="icofont-plus"></i></button>
                                        </div>
                                        
                                    </div>
                           
                            <div class="details-add-group">';
                             
                                if(isset($_SESSION['email'])>0 and $already_cart==0){
                                    echo '<button class="product-add" title="Add to Cart" onclick="add_to_cart('.$product_id.','.$price.','.$_SESSION['user_id'].')">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add to cart</span>
                                    </button><br/>';
                                }else if($already_cart>0){
                                    echo    '<button class="product-add" title="Add to Cart" onclick="already_exist()">
                                                <i class="fas fa-shopping-basket"></i>
                                                <span>add to cart</span>
                                            </button><br/>';
                                }else{
                                    echo '<a class="product-add" title="Add to Cart" href="login.php">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </a><br/>';
                                }
                                
                                echo '<div class="details-action-group">
                                     <button class="details-wish wish '.$status.'"   value='.$product_id.' onclick="view_wish('.$product_id.')" title="Add Your Wishlist">
                                        <i class="icofont-heart"></i>
                                        <span>add to wish</span>
                                    </button>
                                   
                              
                            </div>

                                <p class="details-desc">'.$PRODN05.'</p>
                               
                            </div>
                            
                        </div>
                    </div>
                </div>
               
            </div>
        </section>';

        ?>
        <!--=====================================
                PRODUCT DETAILS PART END
        =======================================-->


        <!--=====================================
                  PRODUCT TAB PART START
        =======================================-->

        <?php
        echo '<section class="inner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs">
                            <!-- <li><a href="#tab-desc" class="tab-link active" data-bs-toggle="tab">descriptions</a></li> -->
                            <li><a href="#tab-spec" class="tab-link active" data-bs-toggle="tab">Specifications</a></li>
                            <li><a href="#tab-reve" class="tab-link" data-bs-toggle="tab">reviews (2)</a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="tab-pane fade show active" id="tab-desc">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-details-frame">
                                <div class="tab-descrip">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, ex! Incidunt nemo aspernatur fugiat, saepe suscipit sit perferendis illum magnam voluptates aliquid blanditiis, dolor assumenda dolorem ullam harum, doloribus molestiae! Unde voluptas maiores exercitationem aperiam debitis accusantium, placeat vero neque, atque eius numquam incidunt, culpa a odit consequatur nostrum aut nisi quisquam sequi dignissimos sed. Odio necessitatibus officiis repudiandae omnis soluta fugiat aliquam eius quae. Unde, ipsam atque assumenda consequuntur quia alias nulla, cupiditate ab quos eveniet pariatur expedita repellendus fugit. Quisquam fuga et, dolore aut temporibus atque itaque nesciunt reiciendis nobis, deleniti nihil vel qui perferendis molestias aliquam doloremque.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="tab-pane fade show active" id="tab-spec">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-details-frame">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Product_Id</th>
                                            <td>SKU: '.$product_id.'</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Weight</th>
                                            <td>1kg, 2kg</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Styles</th>
                                            <td>@Girly</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Properties</th>
                                            <td>Short Dress</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>';
             }
    ?>
                <div class="tab-pane fade" id="tab-reve">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- <div class="product-details-frame">
                                <ul class="review-list">
                                    <li class="review-item">
                                        <div class="review-media">
                                            <a class="review-avatar" href="#">
                                                <img src="images/avatar/01.jpg" alt="review">
                                            </a>
                                            <h5 class="review-meta">
                                                <a href="#">miron mahmud</a>
                                                <span>June 02, 2020</span>
                                            </h5>
                                        </div>
                                        <ul class="review-rating">
                                            <li class="icofont-ui-rating"></li>
                                            <li class="icofont-ui-rating"></li>
                                            <li class="icofont-ui-rating"></li>
                                            <li class="icofont-ui-rating"></li>
                                            <li class="icofont-ui-rate-blank"></li>
                                        </ul>
                                        <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                                        <form class="review-reply">
                                            <input type="text" placeholder="reply your thoughts">
                                            <button><i class="icofont-reply"></i>reply</button>
                                        </form>
                                        <ul class="review-reply-list">
                                            <li class="review-reply-item">
                                                <div class="review-media">
                                                    <a class="review-avatar" href="#">
                                                        <img src="images/avatar/02.jpg" alt="review">
                                                    </a>
                                                    <h5 class="review-meta">
                                                        <a href="#">labonno khan</a>
                                                        <span><b>author -</b> June 02, 2020</span>
                                                    </h5>
                                                </div>
                                                <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                                                <form class="review-reply">
                                                    <input type="text" placeholder="reply your thoughts">
                                                    <button><i class="icofont-reply"></i>reply</button>
                                                </form>
                                            </li>
                                            <li class="review-reply-item">
                                                <div class="review-media">
                                                    <a class="review-avatar" href="#">
                                                        <img src="images/avatar/03.jpg" alt="review">
                                                    </a>
                                                    <h5 class="review-meta">
                                                        <a href="#">tahmina bonny</a>
                                                        <span>June 02, 2020</span>
                                                    </h5>
                                                </div>
                                                <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                                                <form class="review-reply">
                                                    <input type="text" placeholder="reply your thoughts">
                                                    <button><i class="icofont-reply"></i>reply</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="review-item">
                                        <div class="review-media">
                                            <a class="review-avatar" href="#">
                                                <img src="images/avatar/04.jpg" alt="review">
                                            </a>
                                            <h5 class="review-meta">
                                                <a href="#">shipu shikdar</a>
                                                <span>June 02, 2020</span>
                                            </h5>
                                        </div>
                                        <ul class="review-rating">
                                            <li class="icofont-ui-rating"></li>
                                            <li class="icofont-ui-rating"></li>
                                            <li class="icofont-ui-rating"></li>
                                            <li class="icofont-ui-rating"></li>
                                            <li class="icofont-ui-rate-blank"></li>
                                        </ul>
                                        <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                                        <form class="review-reply">
                                            <input type="text" placeholder="reply your thoughts">
                                            <button><i class="icofont-reply"></i>reply</button>
                                        </form>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="product-details-frame">
                                <h3 class="frame-title">add your review</h3>
                                <!-- <form class="review-form"> -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="star-rating">
                                                <input type="radio" name="rating" id="star-1" value="1"><label for="star-1"></label>
                                                <input type="radio" name="rating" id="star-2" value="2"><label for="star-2"></label>
                                                <input type="radio" name="rating" id="star-3" value="3"><label for="star-3"></label>
                                                <input type="radio" name="rating" id="star-4" value="4"><label for="star-4"></label>
                                                <input type="radio" name="rating" id="star-5" value="5"><label for="star-5"></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control" id="describe" placeholder="Describe"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="reviewer_name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="reviewer_email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="btn btn-inline" onclick="post_comment(<?php echo $product_id; ?>)">
                                                <i class="icofont-water-drop"></i>
                                                <span>drop your review</span>
                                            </button>
                                        </div>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    PRODUCT TAB PART END
        =======================================-->


        <!--=====================================
                 PRODUCT RELATED PART START
        =======================================-->
        <section class="inner-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-heading">
                            <h2>related this items</h2>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <?php
                    $sql="select * from  tbl_products where PRODN08='Active'";
                   
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result)){
                        // $image='/admin/masters/product_uploads/."'.$row['PRODN07'].'"';
                        $image='./admin/masters/prod_uploads/'.$row["PRODN07"];
                        $price=$row['PRODN06'];
                        $product_name=$row['PRODN01'];
                        $product_id=$row['PRODTID'];
                        $rating=$row['PRODN11'];

                    

                    echo '<div class="col">
                            <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text new">new</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
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
                                    <span>$'.$price.'<small>/piece</small></span>
                                </h6>';
                        echo    '<button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span title="Product View" href="#" class="add_cart" onclick="add_cart_product('.$product_id.')" data-bs-toggle="modal" data-id='.$product_id.' data-bs-target="#product-view">add cart</span>
                                </button>'; 
                    echo    '</div>
                        </div></div>';
                    }

        ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="product-items.php" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>view all related</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                 PRODUCT RELATED PART END
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
                            <p class="footer-desc">Adipisci asperiores ipsum ipsa repellat consequatur repudiandae quisquam assumenda dolor perspiciatis sit ipsum dolor amet.</p>
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
                            <p class="footer-copytext">&copy;  All Copyrights Reserved by <a target="_blank" href="">Mironcoder</a></p>
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
            function add_cart_product(product_id){
            
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

        function already_exist(){
            alert("This item already added cart!");
        }

        function post_comment(product_id){
            var reviewer_name=$("#reviewer_name").val();
            var reviewer_email=$("#reviewer_email").val();
            var describe=$("#describe").val();
            $.ajax({
                url:"ajax.php",
                method:"post",
                data:{'comment_reviews':'comment_reviews',product_id:product_id,describe:describe,reviewer_email:reviewer_email,reviewer_name:reviewer_name},
                success:function(response){
                    
                }
            })

        }

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






