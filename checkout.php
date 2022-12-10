
       <?php include('header.php');?>
    <?php include('cart.php');?>
    <?php include ('productview.php');?>
       
       
      
        <style>
            .table-quantity .plus {
                cursor: pointer;
                display: inline-block;
                vertical-align: top;
                color: white;
                width: 30px;
                height: 30px;
                font: 30px/1 Arial,sans-serif;
                text-align: center;
                border-radius: 50%;
                background-color: #119744!important;
                }
            .table-quantity .minus {
                cursor: pointer;
                display: inline-block;
                vertical-align: top;
                color: white;
                width: 30px;
                height: 30px;
                font: 30px/1 Arial,sans-serif;
                text-align: center;
                border-radius: 50%;
                background-clip: padding-box;
                background-color: #119744!important;
            }
            .table-quantity .count {
                color: #000;
                display: inline-block;
                vertical-align: top;
                /* font-size: 25px; */
                font-weight: 700;
                line-height: 30px;
                padding: 0 2px
                ;min-width: 35px;
                text-align: center;
            }
           
            nput::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            input:disabled{
                background-color:white;
            }
        </style>
       

      


        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
            <div class="container">
                <h2>checkout</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop-4column.html">shop grid</a></li>
                    <li class="breadcrumb-item active" aria-current="page">checkout</li>
                </ol>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->



        <!--=====================================
                    CHECKOUT PART START
        =======================================-->
      
        <section class="inner-section checkout-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <div class="alert-info">
                            <p>Your Cart</p>
                        </div> -->
                    </div>
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h4>Your order</h4>
                            </div>
                            <div class="account-content">
                                <div class="table-scroll">
                                    <table class="table-list">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product Id</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Sizes/Kgs</th>
                                                <th scope="col">quantity</th>
                                                <th scope="col">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $checkout_grand_total_price=0;
                                            $sql="select * from tbl_cart 
                                            left join tbl_products on PRODTID=fk_product
                                            left join tbl_category on  PRODN10=CATEGTID
                                            where PRODN08='Active'";
                                            $result=mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result)){
                                                $image='./admin/masters/prod_uploads/'.$row["PRODN07"];
                                                $product_name=$row['PRODN01'];
                                                $checkout_total_price=$row['total_price'];
                                                $checkout_unit_price=$row['PRODN06'];
                                                $items=$row['items'];
                                                $cart_id=$row['cart_id'];
                                                $unit_price=$row['PRODN06'];
                                                $uom=$row['uom'];
                                                $product_id=$row['PRODTID'];
                                                
                                            
                                                $categoty_uom=$row['CATEG04'];
                                                echo    '<tr>
                                                            <td class="table-serial"><h6>Pro0001</h6></td>
                                                            <td class="table-image"><img src="'.$image.'" alt="product"></td>
                                                            <td class="table-name"><h6>'.$product_name.'</h6></td>
                                                            <td class="table-price"><h6>$<input type="text" name="checkout_total_price[]" id="checkout_total_price_'.$cart_id.'" value="'.$checkout_total_price.'" readonly><small>/kilo</small></h6>
                                                                <input type="hidden" name="checkout_unit_price[]" id="checkout_unit_price_'.$cart_id.'" value="'.$checkout_unit_price.'" readonly>
                                                                
                                                            </td>';
                                                     if($categoty_uom=='Kgs'){
                                                        
                                                        echo  '<td class="table-brand">'; 
                                                        ?>

                                                                <select class="select_uom_kgs_<?=$cart_id?>" id="select_uom_kgs_<?=$cart_id; ?>" onchange="select_uom_kgs(<?php echo $cart_id; ?>,this)">
                                                                        <option value="0.25" <?php echo ($uom == '0.25')?"selected":"" ?>>0.250g</option>
                                                                        <option value="0.5" <?php echo ($uom == '0.5')?"selected":"" ?>>0.500g</option>
                                                                        <option value="1" <?php echo ($uom == '1')?"selected":"" ?>>1kg</option>
                                                                    </select>
                                                                </td>
                                                        <?php
                                                     } else if($categoty_uom=='Inches'){
                                                        echo  '<td class="table-brand">';
                                                        ?>
                                                                    <select class="select_uom_inches_<?php echo $cart_id; ?>" id="select_uom_inches_<?php echo $cart_id; ?>" onchange="select_uom_inches(<?php echo $cart_id; ?>,this)">
                                                                        <option value="XL" <?php echo ($uom == 'XL')?"selected":"" ?>>XL</option>
                                                                        <option value="L" <?php echo ($uom == 'L')?"selected":"" ?>>L</option>
                                                                        <option value="M" <?php echo ($uom == 'M')?"selected":"" ?>>M</option>
                                                                        <option value="S" <?php echo ($uom == 'S')?"selected":"" ?>>S</option>
                                                                    </select>

                                                                </td>
                                                      <?php
                                                     }else{
                                                        echo  '<td class="table-brand">NA</td>';
                                                     }
                                                    


                                                      echo  '<td class="table-quantity">
                                                                <div class="cart-action-group">
                                                                    <div class="product-action">
                                                                        <button class="action-minus" title="Quantity Minus" onclick="checkoutdecrementValue('.$cart_id.','.$checkout_unit_price.')" value="-"><i class="icofont-minus"></i></button>
                                                                        <input type="text" name="input-quantity[]"  value="'.$items.'" maxlength="2" max="10" size="1"  class="checkout_quantity_'.$cart_id.'"  id="checkout_quantity_'.$cart_id.'"  />
                                                                        <button class="action-plus" title="Quantity Plus" onclick="checkoutincrementValue('.$cart_id.','.$checkout_unit_price.')" value="+"><i class="icofont-plus"></i></button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="table-action">
                                                                <a class="view" href="#" title="Quick View"><i class="fas fa-eye"  data-bs-toggle="modal" data-id='.$product_id.'  data-bs-target="#product-view"></i></a>
                                                                <a class="trash" href="#" title="Remove Wishlist" onclick="checkout_items_delete('.$cart_id.')"><i class="icofont-trash"></i></a>
                                                             
                                                            </td>
                                                        </tr>';

                                                        $checkout_grand_total_price=$checkout_grand_total_price+$checkout_total_price;
                                                       
                                                       
                                            }
                                            echo '<input type="hidden" id="checkout_grand_total_price" value="'.$checkout_grand_total_price.'">';

                                            //total 10% discount price 
                                            $discount_price = (10/100)*$checkout_grand_total_price;
                                            $total=$checkout_grand_total_price- $discount_price;

                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="chekout-coupon">
                                    <button class="coupon-btn">Do you have a coupon code?</button>
                                    <form class="coupon-form">
                                        <input type="text" placeholder="Enter your coupon code">
                                        <button type="submit"><span>apply</span></button>
                                    </form>
                                   
                                </div>
                                <div class="checkout-charge">
                                    <ul>
                                        <li>
                                            <span>Sub total</span>
                                            <span id="checkout_grand_total_price_span">$<?php echo $checkout_grand_total_price;  ?></span>
                                        </li>
                                        <li>
                                            <span>delivery fee</span>
                                            <span>$00.00</span>
                                        </li>
                                        <li>
                                            <span>discount</span>
                                            <span>$<?php echo round($discount_price,2); ?></span>
                                        </li>
                                        <li>
                                            <span>Total<small>(Incl. VAT)</small></span>
                                            <span>$<?php echo round($total,2); ?></span>
                                        </li>
                                    </ul>
                                    <?php 
                                    
                                    if($_SESSION['email']>0){ 
                                           
                                   echo' <a class="cart-checkout-btn" href="address.php">
                                   
                                        <span class="checkout-label">Proceed to Checkout</span>
                                        <span class="checkout-price">Rs'.$total.'</span>
                                    </a>';
                                }
                                // else{
                                //     echo '<a class="cart-checkout-btn" href="login.php"></a>';
                                // }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
        <!--=====================================
                    CHECKOUT PART END
        =======================================-->


        <!--=====================================
                    MODAL ADD FORM START
        =======================================-->
        <!-- contact add form -->
        <div class="modal fade" id="contact-add">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>add new contact</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">title</label>
                            <select class="form-select">
                                <option selected>choose title</option>
                                <option value="primary">primary</option>
                                <option value="secondary">secondary</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">number</label>
                            <input class="form-control" type="text" placeholder="Enter your number">
                        </div>
                        <button class="form-btn" type="submit">save contact info</button>
                    </form>
                </div> 
            </div> 
        </div>

        <!-- address add form -->
        <div class="modal fade" id="address-add">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>add new address</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">title</label>
                            <select class="form-select">
                                <option selected>choose title</option>
                                <option value="home">home</option>
                                <option value="office">office</option>
                                <option value="Bussiness">Bussiness</option>
                                <option value="academy">academy</option>
                                <option value="others">others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">address</label>
                            <textarea class="form-control" placeholder="Enter your address"></textarea>
                        </div>
                        <button class="form-btn" type="submit">save address info</button>
                    </form>
                </div> 
            </div> 
        </div>

        <!-- payment add form -->
        <div class="modal fade" id="payment-add">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>add new payment</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">card number</label>
                            <input class="form-control" type="text" placeholder="Enter your card number">
                        </div>
                        <button class="form-btn" type="submit">save card info</button>
                    </form>
                </div> 
            </div> 
        </div>
        <!--=====================================
                    MODAL ADD FORM END
        =======================================-->

        
        <!--=====================================
                    MODAL EDIT FORM START
        =======================================-->
        <!-- contact edit form -->
        <div class="modal fade" id="contact-edit">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>edit contact info</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">title</label>
                            <select class="form-select">
                                <option value="primary" selected>primary</option>
                                <option value="secondary">secondary</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">number</label>
                            <input class="form-control" type="text" value="+8801838288389">
                        </div>
                        <button class="form-btn" type="submit">save contact info</button>
                    </form>
                </div> 
            </div> 
        </div>

        <!-- address edit form -->
        <div class="modal fade" id="address-edit">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>edit address info</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">title</label>
                            <select class="form-select">
                                <option value="home" selected>home</option>
                                <option value="office">office</option>
                                <option value="Bussiness">Bussiness</option>
                                <option value="academy">academy</option>
                                <option value="others">others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">address</label>
                            <textarea class="form-control" placeholder="jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A"></textarea>
                        </div>
                        <button class="form-btn" type="submit">save address info</button>
                    </form>
                </div> 
            </div> 
        </div>
        <!--=====================================
                    MODAL EDIT FORM END
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

                function checkoutincrementValue(cart_id,unit_price)
                {
                   
                    var input = $("#checkout_quantity_"+cart_id).val();
                    var checkout_grand_total_price = $("#checkout_grand_total_price").val();
                    var select_uom_kgs=$("#select_uom_kgs_"+cart_id).val();
                    
                    if(select_uom_kgs=="0.25"){
                        input = isNaN(input) ? 0 : input;
                    
                        if(input<10){
                            input++;
                                document.getElementById('checkout_quantity_'+cart_id).value  = input;
                                document.getElementById('checkout_total_price_'+cart_id).value =(parseFloat(unit_price)*input)/4;
                            
                                document.getElementById('checkout_grand_total_price').value = (parseFloat(checkout_grand_total_price)+parseFloat(unit_price));
                                checkout_grand_total_price_span.innerHTML =  (parseFloat(checkout_grand_total_price)+parseFloat(unit_price));
                        }
                    }else if(select_uom_kgs=="0.5"){
                        input = isNaN(input) ? 0 : input;
                    
                        if(input<10){
                            input++;
                                document.getElementById('checkout_quantity_'+cart_id).value  = input;
                                document.getElementById('checkout_total_price_'+cart_id).value =(parseFloat(unit_price)*input)/2;
                            
                                document.getElementById('checkout_grand_total_price').value = (parseFloat(checkout_grand_total_price)+parseFloat(unit_price));
                                checkout_grand_total_price_span.innerHTML =  (parseFloat(checkout_grand_total_price)+parseFloat(unit_price));
                        }
                    }else{
                        input = isNaN(input) ? 0 : input;
                    
                        if(input<10){
                            input++;
                                document.getElementById('checkout_quantity_'+cart_id).value  = input;
                                document.getElementById('checkout_total_price_'+cart_id).value =unit_price*input;
                            
                                document.getElementById('checkout_grand_total_price').value = (parseFloat(checkout_grand_total_price)+parseFloat(unit_price));
                                checkout_grand_total_price_span.innerHTML =  (parseFloat(checkout_grand_total_price)+parseFloat(unit_price));
                        }
                    }
                   
                }
                function checkoutdecrementValue(cart_id,unit_price)
                {
                 
                    var input = $("#checkout_quantity_"+cart_id).val();
                    var checkout_grand_total_price = $("#checkout_grand_total_price").val();
                    var select_uom_kgs=$("#select_uom_kgs_"+cart_id).val();
                    
                    if(select_uom_kgs=="0.25"){
                        input = isNaN(input) ? 0 : input;
                    
                        if(input>1){
                            input--;
                                document.getElementById('checkout_quantity_'+cart_id).value  = input;
                                document.getElementById('checkout_total_price_'+cart_id).value =(parseFloat(unit_price)*input)/4;
                                document.getElementById('checkout_grand_total_price').value = (parseFloat(checkout_grand_total_price)-parseFloat(unit_price));
                                checkout_grand_total_price_span.innerHTML =  (parseFloat(checkout_grand_total_price)-parseFloat(unit_price));
                        
                        }
                    }else if(select_uom_kgs=="0.5"){
                        input = isNaN(input) ? 0 : input;
                    
                        if(input>1){
                            input--;
                                document.getElementById('checkout_quantity_'+cart_id).value  = input;
                                document.getElementById('checkout_total_price_'+cart_id).value =(parseFloat(unit_price)*input)/2;
                                document.getElementById('checkout_grand_total_price').value = (parseFloat(checkout_grand_total_price)-parseFloat(unit_price));
                                checkout_grand_total_price_span.innerHTML =  (parseFloat(checkout_grand_total_price)-parseFloat(unit_price));
                        
                        }
                    }else{
                        input = isNaN(input) ? 0 : input;
                    
                        if(input>1){
                            input--;
                                document.getElementById('checkout_quantity_'+cart_id).value  = input;
                                document.getElementById('checkout_total_price_'+cart_id).value =unit_price*input;
                                document.getElementById('checkout_grand_total_price').value = (parseFloat(checkout_grand_total_price)-parseFloat(unit_price));
                                checkout_grand_total_price_span.innerHTML =  (parseFloat(checkout_grand_total_price)-parseFloat(unit_price));
                        
                        }
                    }

                   
                  
                }


                function select_uom_kgs(cart_id,selected_value){
                    var selected_values=selected_value.value;
                    var checkout_unit_price=$("#checkout_unit_price_"+cart_id).val();
                    var input = $("#checkout_quantity_"+cart_id).val();
                   
                    if(selected_values=='0.5'){
                       
                        document.getElementById('checkout_total_price_'+cart_id).value =(parseFloat(checkout_unit_price)/2)*input;
                        // document.getElementById('checkout_grand_total_price').value = (parseFloat(checkout_grand_total_price)+((parseFloat(checkout_unit_price)/2)*input));
                        // checkout_grand_total_price_span.innerHTML =  (parseFloat(checkout_grand_total_price)+((parseFloat(checkout_unit_price)/2)*input));
                    }else if(selected_values=='0.25'){
                        
                        document.getElementById('checkout_total_price_'+cart_id).value =(parseFloat(checkout_unit_price)/4)*input;
                        // document.getElementById('checkout_grand_total_price').value = (parseFloat(checkout_grand_total_price)+((parseFloat(checkout_unit_price)/4)*input));
                        // checkout_grand_total_price_span.innerHTML =  (parseFloat(checkout_grand_total_price)+((parseFloat(checkout_unit_price)/4)*input));
                    }else{
                         document.getElementById('checkout_total_price_'+cart_id).value =(parseFloat(checkout_unit_price))*input;
                    }

                  
                }

                
                $(document).ready(function(){
                    $(".fa-eye").click(function(){
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

                function checkout_items_delete(cart_id){
                    $.ajax({
                        url:"ajax.php",
                        method:"post",
                        data:{'cart_items_delete':'cart_items_delete',cart_id:cart_id},
                        success:function(response){
                            // $("#row_" + cart_id).remove();
                            window.location ='checkout.php';
                        }
                    })
                }

        </script>
        

    </body>
</html>






