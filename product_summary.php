
       <?php include('header.php');?>
    <?php include('cart.php');?>
    <?php include ('productview.php');?>
       

        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
            <div class="container">
                <h2>Product Summary</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Summary</li>
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
                                            where PRODN08='Active' and tbl_cart.fk_userid='".$_SESSION['user_id']."'";
                                            $result=mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result)){
                                                $image='./admin/masters/prod_uploads/'.$row["PRODN07"];
                                                $product_name=$row['PRODN01'];
                                                // $checkout_total_price=$row['total_price'];
                                                // $checkout_unit_price=$row['PRODN06'];
                                                $items=$row['items'];
                                                $cart_id=$row['cart_id'];
                                                $unit_price=$row['PRODN06'];
                                                $uom=$row['uom'];
                                                

                                                if($uom=='0.5'){
                                                    $checkout_unit_price=round(($row['PRODN06']),2);
                                                    $checkout_total_price= round((($row['PRODN06']/2)*$items), 2);
                                                }else if($uom=='0.25'){
                                                    $checkout_unit_price=round(($row['PRODN06']),2);
                                                    $checkout_total_price= round((($row['PRODN06']/4)*$items), 2);
                                                }else {
                                                    $checkout_unit_price=$row['PRODN06'];
                                                    $checkout_total_price=$row['PRODN06']*$items;

                                                }
                                                $symbol="₹";

                                              
                                               if($_SESSION['currency']=="USD"){
                                                    if($uom=='0.5'){
                                                        $checkout_unit_price=round(($row['PRODN06']*$exchange_rate),2);
                                                        $checkout_total_price= round((($row['PRODN06']/2)*$items*$exchange_rate), 2);
                                                    }else if($uom=='0.25'){
                                                        $checkout_unit_price=round(($row['PRODN06']*$exchange_rate),2);
                                                        $checkout_total_price= round((($row['PRODN06']/4)*$items*$exchange_rate), 2);
                                                    }else{
                                                        $checkout_unit_price=$row['PRODN06']*$exchange_rate;
                                                        $checkout_total_price=$row['PRODN06']*$items*$exchange_rate;
                                                    }
                                                    
                                                 
                                                    $symbol="$";
            
                                                }else if($_SESSION['currency']=="Pound"){

                                                    if($uom=='0.5'){
                                                        $checkout_unit_price=round(($row['PRODN06']*$exchange_rate),2);
                                                        $checkout_total_price= round((($row['PRODN06']/2)*$items*$exchange_rate), 2);
                                                       
                                                    }else if($uom=='0.25'){
                                                        $checkout_unit_price=round(($row['PRODN06']*$exchange_rate),2);
                                                        $checkout_total_price= round((($row['PRODN06']/4)*$items*$exchange_rate), 2);
                                                      
                                                    }else{
                                                        $checkout_unit_price=$row['PRODN06']*$exchange_rate;
                                                        $checkout_total_price=$row['PRODN06']*$items*$exchange_rate;
                                                    }
                                                   
                                                    $symbol="£";
                                                }

                                                if($uom=="0.5"){
                                                    $uom_value="500 gms";
                                                }else if($uom=="0.25"){
                                                    $uom_value="250 gms";
                                                }else{
                                                    $uom_value="1 Kgs";
                                                }

                                                $product_id=$row['PRODTID'];
                                                $categoty_uom=$row['CATEG04'];

                                                echo '<input type="hidden" name="checkout_id" id="checkout_id" value="'.$row['fk_checkout_id'].'">';
                                                echo '<input type="hidden" name="user_id" id="user_id" value="'.$_SESSION['user_id'].'">';
                                                echo    '<tr>
                                                            <td class="table-serial"><h6>Pro0001</h6></td>
                                                            <td class="table-image"><img src="'.$image.'" alt="product"></td>
                                                            <td class="table-name"><h6>'.$product_name.'</h6></td>
                                                            <td class="table-price"><h6>'.$symbol.''.$checkout_total_price.'</h6>
                                                              
                                                            </td>';
                                                 if($categoty_uom=='Kgs'){
                                                        echo  '<td class="table-brand">'.$uom_value.'</td>';
                                                    } else if($categoty_uom=='Inches'){
                                                        echo  '<td class="table-brand">'.$uom.'</td>';
                                                    }else{
                                                        echo  '<td class="table-brand">NA</td>';
                                                    }
                                                   
                                                      echo  '<td class="table-quantity">'.$items.'</td>
                                                            <td class="table-action">
                                                                <a class="view" href="#" title="Quick View"><i class="fas fa-eye"  data-bs-toggle="modal" data-id='.$product_id.'  data-bs-target="#product-view"></i></a>
                                                                <a class="trash" href="#" title="Remove Wishlist" onclick="checkout_items_delete('.$cart_id.')"><i class="icofont-trash"></i></a>
                                                             
                                                            </td>
                                                        </tr>';

                                                        $checkout_grand_total_price=$checkout_grand_total_price+$checkout_total_price;
                                                       
                                            }

                                            //total 10% discount price 
                                            // $discount_price = (10/100)*$checkout_grand_total_price;
                                            // $total=$checkout_grand_total_price- $discount_price;

                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="checkout-charge">
                                    <ul>
                                        <li>
                                            <span>Sub total</span>
                                            <span ><?php echo $symbol.''.round($checkout_grand_total_price,2);  ?></span>
                                        </li>
                                        <li>
                                            <span>delivery fee</span>
                                            <span>00.00</span>
                                        </li>
                                        <!-- <li>
                                            <span>discount</span>
                                            <span><?php echo round($discount_price,2); ?></span>
                                        </li> -->
                                        <li>
                                            <span>Total<small>(Incl. VAT)</small></span>
                                            <span><?php echo  $symbol.''.round($checkout_grand_total_price,2); ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h4>delivery address</h4>
                                <!-- <button data-bs-toggle="modal" data-bs-target="#address-add">add address</button> -->
                            </div>
                            <div class="account-content">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 alert fade show">
                                        <?php 

                                        $sql="select * from tbl_address where fk_user_id='".$_SESSION['user_id']."'";
                                        $result=mysqli_query($con,$sql);
                                        while($row=mysqli_fetch_array($result)){

                                            $address_type=$row['address_type'];
                                            $first_name=$row['first_name'];
                                            $last_name=$row['last_name'];
                                            $landmark=$row['landmark'];
                                            $city=$row['city'];
                                            $zip=$row['zip'];
                                            $state=$row['state'];
                                            $country=$row['country'];
                                            $address=$row['address'];
                                            $image_name=$row['image'];
                                            $sign_name=$row['sign'];
                                            
                                            $image="./uploads_address/".$row['image']."";
                                            $sign="./uploads_address/".$row['sign']."";


                                            echo '<div class="profile-card address active">
                                                    <h6>'.$address_type.'</h6>
                                                    <p>'.$first_name.' '.$last_name.'</p>
                                                    <p>'.$address.','.$landmark.','.$city.','.$zip.'</p><p>'.$state.','.$country.'</p>
                                                    <ul class="user-action">
                                                        <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                                    </ul>
                                                </div>';
                                        }
                                      
                                        ?>
                                        
                                    </div>
                                </div>
                                <div class="checkout-check">
                                        <input type="checkbox" id="checkout-check">
                                        <label for="checkout-check">By making this purchase you agree to our <a href="#">Terms and Conditions</a>.</label>
                                    </div>
                                    <div class="checkout-proced">
                                        <button href="invoice.html" class="btn btn-inline" onclick="procced_orders()">proced to Payment</button>
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
                    <form id="frm-image-upload" action="address_ajax.php"  method="POST" enctype = "multipart/form-data" onsubmit="return validateform()">
                        <div class="user-form-card">
                            <div class="user-form-title">
                                <h2>ADDRESS</h2>
                                <p>Setup A New Account In A Minute</p>
                            </div>
                            <div class="user-form-group">
                                <!-- <ul class="user-form-social">
                                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Join with facebook</a></li>
                                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>Join with twitter</a></li>
                                    <li><a href="#" class="google"><i class="fab fa-google"></i>Join with google</a></li>
                                    <li><a href="#" class="instagram"><i class="fab fa-instagram"></i>Join with instagram</a></li>
                                </ul> -->
                                <figure class="figure">
                                    <img src="images.jpg" class="figure-img img-fluid rounded" alt="..." width="650" height="950">
                                    <!-- <figcaption class="figure-caption text-end">A caption for the above image.</figcaption> -->
                                  </figure>
                                <div class="user-form-divider">
                                    <p>or</p>
                                </div>
                                <div class="user-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group me-2">
                                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">   
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $first_name; ?>" placeholder="Enter First name">   
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $last_name; ?>" placeholder="Enter Last name">  
                                    </div>
                                </div>
                                </div>
                                    <form action="#" id="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="address" name="address"  value="<?php echo $address; ?>" placeholder="Enter your Address" >
                                        <span id="text"></span>
                                    </div>
                                       </form>
                                    <div class="form-group">
                                        <input type="type" class="form-control" id="landmark" name="landmark" value="<?php echo $landmark; ?>" placeholder="Enter your landmark" >
                                    </div>
                                <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group me-1">
                                    <input type="text" class="form-control" id="city" name="city" value="<?php echo $city; ?>" placeholder="Enter city">   
                                    </div>
                                  </div>
                             
                                <div class="col-lg-6">
                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="zip" name="zip" value="<?php echo $zip; ?>" placeholder="Enter Zip code">  
                                    </div>
                                </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="type" class="form-control" id="state" name="state" value="<?php echo $state; ?>" placeholder="Enter your state" >
                                    </div>

                                    <div class="form-group">
                                        <input type="type" class="form-control" id="country" name="country" value="<?php echo $country; ?>" placeholder="Enter your country" >
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>Choose Image :</div>
                                            <div>
                                                <input type="file" class="file-image" name="file_image"  value="<?php echo $image_name; ?>" onchange="loadImageFile(event)" accept="image/jpeg">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <img id="ImageFile" width="150" height="150" src="<?php echo $image; ?>"/>
                                        </div>
                                    </div>   
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>Choose Sign :</div>
                                            <div>
                                                <input type="file" class="file-sign" name="file_sign" id="file_sign"  value="<?php echo $sign_name; ?>" onchange="loadSignFile(event)"  accept="image/jpeg">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <img id="SignFile" width="150" height="150" src="<?php echo $sign; ?>"/>
                                        </div>
                                    </div>  
                                        <span id="address_type"><input  type="hidden" id="address_value" name="address_value" value="<?php echo $address_type; ?>"></span>
                                    <div class="view-list-group">
                                    
                                    <ul class="view-tag-list">
                                        <?php if($address_type=="Home"){ 
                                            $status="active";
                                            echo '<li><button type="button" class="btn btn-outline-success '.$status.'" id="myfunction_address_home" onclick="myfunction_ofc()" >Home</button></li>';
                                            echo '<li><button type="button" class="btn btn-outline-success " id="myfunction_address_ofc" onclick="myfunction_home()">Office</button></li>';
                                        }else{
                                            $status="active";
                                            echo '<li><button type="button" class="btn btn-outline-success " id="myfunction_address_home" onclick="myfunction_ofc()">Home</button></li>';
                                            echo '<li><button type="button" class="btn btn-outline-success '.$status.'" id="myfunction_address_ofc" onclick="myfunction_home()">Office</button></li>';
                                        }
                                        ?>
                                        
                                    </ul>
                                    
                                </div>
                                  
                                    <div class="form-button">
                                        <button type="submit" name="Update" id="submit" value="Update"  >Update</button>
                                    </div>
                                 </div>
                            </div>
                        </div>
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

                function procced_orders(){
                    var checkout_id = $("#checkout_id").val();
                    var user_id = $("#user_id").val();
                    $.ajax({
                        url:"ajax.php",
                        method:"post",
                        data:{'add_orders':'add_orders',checkout_id:checkout_id,user_id:user_id},
                        success:function(response){
                            // $("#row_" + cart_id).remove();
                            window.location ='order_tracking.php';
                        }
                    })
                }
            </script>
             <script>
         
         function myfunction_home(){
            address_type.innerHTML = '<input  type="hidden" id="address_value" name="address_value" value="Home">';
            
                var myfunction_address_ofc = document.getElementById("myfunction_address_ofc");
                var myfunction_address_home = document.getElementById("myfunction_address_home");
                myfunction_address_ofc.classList.add("active");
                myfunction_address_home.classList.remove("active");
        }
        function myfunction_ofc(){
            address_type.innerHTML = '<input  type="hidden" id="address_value" name="address_value" value="Office">';
            
                var myfunction_address_home = document.getElementById("myfunction_address_home");
                var myfunction_address_ofc = document.getElementById("myfunction_address_ofc");
                myfunction_address_ofc.classList.remove("active");
                myfunction_address_home.classList.add("active");
        }

                function validateform(){  
                        var first_name = $("#first_name").val();
                        var last_name = $("#last_name").val();
                        var address = $("#address").val();
                        var landmark = $("#landmark").val();
                        var city = $("#city").val();
                        var zip=$("#zip").val();
                        var state=$("#state").val();
                        var country=$("#country").val();
                        var address_value=$("#address_value").val();
                        if ( first_name.length>0 && last_name.length>0 && address.length>0 && landmark.length>0 && city.length>0 && zip.length>0 && state.length>0 && country.length>0  && address_value.length>0) {
                        form.submit();
                            return true;  
                        }else{
                            alert("Please fill all the fields.");
                            return false;  
                        }
                }  
                    
                //priview uploaded image
                var loadSignFile = function(event) {
                    var SignFile = document.getElementById('SignFile');
                    var file = event.target.files[0];
                    if(file.size>51200){
                        alert("Please size below 50Kbs.");
                    }else{
                        SignFile.src = URL.createObjectURL(event.target.files[0]);
                            SignFile.onload = function() {
                            
                                URL.revokeObjectURL(SignFile.src) 
                        // free memory
                        }
                    }
                   
                   
                };
                var loadImageFile = function(event) {
                    var ImageFile = document.getElementById('ImageFile');
                   
                    var fileImage = event.target.files[0];
                    if(fileImage.size>51200){
                        
                        alert("Please size below 50Kbs.");
                    }else{
                        ImageFile.src = URL.createObjectURL(event.target.files[0]);
                        ImageFile.onload = function() {
                        URL.revokeObjectURL(ImageFile.src) // free memory
                        }
                    }
                };

                
                
          
    </script>
              
    </body>
</html>






