       <?php  include('header.php')?>
       <?php include('cart.php');?>
       <?php include ('productview.php');?>
       <?php echo '<input type="hidden" id="user_id" value="'.$_SESSION['user_id'].'">';  ?>

        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
            <div class="container">
                <h2>wishlist</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop-4column.html">shop grid</a></li>
                    <li class="breadcrumb-item active" aria-current="page">wishlist</li>
                </ol>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                    WISHLIST PART START
        =======================================-->
        <section class="inner-section wishlist-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-scroll">
                            <table class="table-list">
                                <thead>
                                    <tr>
                                        <th scope="col">Serial</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">shopping</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                  $sqlx="select * from tbl_currency where currency_name='".$_SESSION['currency']."'";
                                  $resultx=mysqli_query($con,$sqlx);
                                  $rowx=mysqli_fetch_array($resultx);
                                  $exchange_rate=$rowx['exchange_rate'];

                                $sno=1;
                                 $sql="select * from tbl_wishlist left join tbl_products on PRODTID=fk_product_id where tbl_wishlist.status='Active'";
                                
                                 $result= mysqli_query($con, $sql);
                                 while($row=mysqli_fetch_array($result))
                                 {
                                    $image='./admin/masters/prod_uploads/'.$row["PRODN07"];
                                    $product_name=$row['PRODN01'];
                                    $product_id=$row['PRODTID'];
                                    $wishlist_id=$row['wishlist_id'];
                                    $price = $row['PRODN06'];
                                    $symbol="₹";
                                  
                                   if($_SESSION['currency']=="USD"){
                                        
                                       $price = round(($row['PRODN06']*$exchange_rate), 2);
                                        $symbol="$";

                                    }else if($_SESSION['currency']=="Pound"){
                                        $price = round(($row['PRODN06']*$exchange_rate), 2);
                                        $symbol="£";
                                    }
                                echo'
                                
                                    <tr>
                                        <td class="table-serial"><h6>'.$sno.'</h6></td>
                                        <td class="table-image"><img src='.$image.' alt="product"></td>
                                        <td class="table-name"><h6>'.$product_name.'</h6></td>
                                        <td class="table-price"><h6>'.$symbol.''. $price.'<small>/kilo</small></h6></td>
                                        <td class="table-shop">
                                            <button class="product-add" title="Add to Cart">
                                                <i class="fas fa-shopping-basket"></i>
                                                <span title="Product View" href="#" class="add_cart" onclick="add_cart('.$product_id.')" data-bs-toggle="modal" data-id='.$product_id.' data-bs-target="#product-view">add cart</span>
                                            </button>
                                            <div class="product-action">
                                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                            </div>
                                        </td>
                                        <td class="table-action">
                                            <a class="view" title="Quick View" href="product-tab.php?id='.$product_id.'"><i class="fas fa-eye"></i></a>
                                            <a class="trash" href="#" title="Remove Wishlist" onclick="wishlist_items_delete('.$product_id.')"><i class="icofont-trash"></i></a>
                                        </td>
                                    </tr>';
                                    $sno++;
                            }

                                
                               
                                
                                
                            ?>
                             </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-5">
                            <button class="btn btn-outline">
                                Load more items
                            </button>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!--=====================================
                    WISHLIST PART END
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
            function wishlist_items_delete(product_id){
                var user_id=$("#user_id").val();
                alert(user_id);
                         $.ajax({
                            url:"ajax.php",
                            method:"post",
                            data:{'remove_wishlist':'remove_wishlist',user_id:user_id,product_id:product_id},
                            success:function(response){
                                // $("#row_" + cart_id).remove();
                                // window.location ='wishlist.php';
                            }
                        })
                }
        </script>
    </body>
</html>






