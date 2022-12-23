<!DOCTYPE html>
<html lang="en">
    <head>
        
       <?php include('header.php');?>
    <?php include('cart.php');?>
        <!--=====================================
                    META TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- AUTHOR META -->
        <meta name="author" content="mironcoder">
        <meta name="email" content="mironcoder@gmail.com">
        <meta name="profile" content="https://themeforest.net/user/mironcoder">

        <!-- TEMPLATE META -->
        <meta name="name" content="Greeny">
        <meta name="title" content="Greeny - eCommerce HTML Template">
        <meta name="keywords" content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, webshop, farm, grocery, natural, online store">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- WEBPAGE TITLE -->
        <title>Greeny - Order History</title>

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <!-- FAVICON -->
        <link rel="icon" href="images/favicon.png">

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
        <link rel="stylesheet" href="css/orderlist.css">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
        <div class="backdrop"></div>
        <a class="backtop fas fa-arrow-up" href="#"></a>


        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
            <div class="container">
                <h2>My Orders</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Orderlist</li>
                </ol>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                    ORDERLIST PART START
        =======================================-->
        <section class="inner-section orderlist-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                     <?php 
                       $sqlxx="select * from tbl_currency where currency_name='".$_SESSION['currency']."'";
                       $resultxx=mysqli_query($con,$sqlxx);
                       $rowxx=mysqli_fetch_array($resultxx);
                       $exchange_rate=$rowxx['exchange_rate'];


                        $x=1;
                        $sql="select * from tbl_orders where  fk_user_id='".$_SESSION['user_id']."'";
                        $result=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($result)){

                            $order_id=$row['order_id'];
                            $order_time=$row['order_time'];
                            $delivery_date=$row['delivery_date'];
                            $order_recieved=$row['order_recieved'];
                            $order_processed=$row['order_processed'];
                            $order_shipped=$row['order_shipped'];
                            $order_delivered=$row['order_delivered'];
                            $status=$row['status'];
                           

                        echo '<div class="orderlist">
                                <div class="orderlist-head">
                                    <h5>order#'.$x.'</h5>
                                    <h5>'.$status.'</h5>
                                </div>
                                <div class="orderlist-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="order-track">
                                                <ul class="order-track-list">
                                                    <li class="order-track-item '.$order_recieved.'">
                                                        <i class="icofont-check"></i>
                                                        <span>order recieved</span>
                                                    </li>
                                                    <li class="order-track-item '.$order_processed.'">
                                                        <i class="icofont-close"></i>
                                                        <span>order processed</span>
                                                    </li>
                                                    <li class="order-track-item '.$order_shipped.'">
                                                        <i class="icofont-close"></i>
                                                        <span>order shipped</span>
                                                    </li>
                                                    <li class="order-track-item" '.$order_delivered.'>
                                                        <i class="icofont-close"></i>
                                                        <span>order delivered</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>';
                                echo    '<div class="col-lg-12">
                                            <div class="table-scroll">
                                                <table class="table-list">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Serial</th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">brand</th>
                                                            <th scope="col">quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>';
                                                       $sno=1;
                                                        $sqlx="select * from tbl_checkout
                                                        left join tbl_products on fk_product=PRODTID 
                                                        left join tbl_category on  PRODN10=CATEGTID
                                                        left join tbl_address on tbl_address.fk_user_id=tbl_checkout.fk_userid
                                                        where checkout_id='".$row['fk_checkout_id']."' and fk_userid='".$row['fk_user_id']."'";
                                                        // echo $sqlx;
                                                        $resultx=mysqli_query($con,$sqlx);
                                                        while($rowx=mysqli_fetch_array($resultx)){

                                                            $image='./admin/masters/prod_uploads/'.$rowx["PRODN07"];
                                                            $product_name=$rowx['PRODN01'];
                                                            $items=$rowx['items'];
                                                            $unit_price=$rowx['PRODN06'];
                                                            $uom=$rowx['uom'];
                                                            $brand_name=$rowx['brand_name'];
                                                            //address 
                                                            $address_type=$rowx['address_type'];
                                                            $first_name=$rowx['first_name'];
                                                            $last_name=$rowx['last_name'];
                                                            $landmark=$rowx['landmark'];
                                                            $city=$rowx['city'];
                                                            $zip=$rowx['zip'];
                                                            $state=$rowx['state'];
                                                            $country=$rowx['country'];
                                                            
            
                                                            if($uom=='0.5'){
                                                                $unit_price=round(($rowx['PRODN06']),2);
                                                                $total_price= round((($rowx['PRODN06']/2)*$items), 2);
                                                            }else if($uom=='0.25'){
                                                                $unit_price=round(($rowx['PRODN06']),2);
                                                                $total_price= round((($rowx['PRODN06']/4)*$items), 2);
                                                            }else {
                                                                $unit_price=$rowx['PRODN06'];
                                                                $total_price=$roxx['PRODN06']*$items;
            
                                                            }
                                                            $symbol="₹";
            
                                                          
                                                           if($_SESSION['currency']=="USD"){
                                                                if($uom=='0.5'){
                                                                    $unit_price=round(($rowx['PRODN06']*$exchange_rate),2);
                                                                    $total_price= round((($rowx['PRODN06']/2)*$items*$exchange_rate), 2);
                                                                }else if($uom=='0.25'){
                                                                    $unit_price=round(($rowx['PRODN06']*$exchange_rate),2);
                                                                    $total_price= round((($rowx['PRODN06']/4)*$items*$exchange_rate), 2);
                                                                }else{
                                                                    $unit_price=$rowx['PRODN06']*$exchange_rate;
                                                                    $total_price=$rowx['PRODN06']*$items*$exchange_rate;
                                                                }
                                                                
                                                             
                                                                $symbol="$";
                        
                                                            }else if($_SESSION['currency']=="Pound"){
            
                                                                if($uom=='0.5'){
                                                                    $unit_price=round(($rowx['PRODN06']*$exchange_rate),2);
                                                                    $total_price= round((($rowx['PRODN06']/2)*$items*$exchange_rate), 2);
                                                                   
                                                                }else if($uom=='0.25'){
                                                                    $unit_price=round(($rowx['PRODN06']*$exchange_rate),2);
                                                                    $total_price= round((($rowx['PRODN06']/4)*$items*$exchange_rate), 2);
                                                                  
                                                                }else{
                                                                    $unit_price=$rowx['PRODN06']*$exchange_rate;
                                                                    $total_price=$rowx['PRODN06']*$items*$exchange_rate;
                                                                }
                                                               
                                                                $symbol="£";
                                                            }
            
                                                       
                                                       echo '<tr>
                                                                <td class="table-serial"><h6>'.$sno.'</h6></td>
                                                                <td class="table-image"><img src="'.$image.'" alt="product"></td>
                                                                <td class="table-name"><h6>'.$rowx['PRODN01'].'</h6></td>
                                                                <td class="table-price"><h6>'.$symbol.''.$total_price.'</h6></td>
                                                                <td class="table-brand"><h6>'.$brand_name.'</h6></td>
                                                                <td class="table-quantity"><h6>'.$items.'</h6></td>
                                                            </tr>';
                                                            $grand_total_price=$grand_total_price+$total_price;
                                                            $sno++;
                                                        }
                                                        
                                              echo '</tbody>
                                                </table>
                                            </div>
                                        </div>';
                                  echo  '<div class="col-lg-5">
                                        <ul class="orderlist-details">
                                            <li>
                                                <h6>order id</h6>
                                                <p>'.$order_id.'</p>
                                            </li>
                                            <li>
                                                <h6>Total Item</h6>
                                                <p>'.$items.'</p>
                                            </li>
                                            <li>
                                                <h6>Order Time</h6>
                                                <p>'.$order_time.'</p>
                                            </li>
                                            <li>
                                                <h6>Delivery Date</h6>
                                                <p>'.$delivery_date.'</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="orderlist-details">
                                            <li>
                                                <h6>Sub Total</h6>
                                                <p>'.$symbol.''.$grand_total_price.'</p>
                                            </li>
                                            <li>
                                                <h6>discount</h6>
                                                <p>00.00</p>
                                            </li>
                                            <li>
                                                <h6>delivery fee</h6>
                                                <p>00.00</p>
                                            </li>
                                            <li>
                                                <h6>Total<small>(Incl. VAT)</small></h6>
                                                <p>'.$symbol.''.$grand_total_price.'</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="orderlist-deliver">
                                        <h6>'.$address_type.'</h6>
                                        <p>'.$first_name.' '.$last_name.'</p>
                                        <p>'.$address.','.$landmark.','.$city.','.$zip.'</p><p>'.$state.','.$country.'</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>';

                            $x++;
                        }
                    ?>
                
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    ORDERLIST PART END
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
    </body>
</html>






