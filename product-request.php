
         <?php include('header.php');?>
    <?php include('cart.php');?>
    <?php include ('productview.php');?>

    <style>
#snackbar {
  visibility: hidden;
 
  margin-left: 34rem;
  max-width: fit-content;
  background-color: #119744;
  color: #fff;
  /* text-align: center; */
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}
#snackbar1 {
  visibility: hidden;
 
  margin-left: 34rem;
  max-width: fit-content;
  background-color: red;
  color: #fff;
  /* text-align: center; */
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
#snackbar1.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>

        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="inner-section single-banner" style="background: url(images/Request-Product.jpg) no-repeat center;">
            <div class="container">
                <h2>Product Request</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Request</li>
                </ol>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                     ABOUT PART START
        =======================================-->
        <section class="inner-section about-company">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2>Request your favourite product from India and get it delivered in your doorstep.</h2>
                            <p>If you’re looking to purchase products from India to be delivered overseas, you’ve come to the right place. We provide a comprehensive and reliable service to get your products from India to your destination of choice.
We understand that ordering goods from India can be daunting, given the distance and the cost of international shipping. That’s why we’ve gone the extra mile to make the process as easy and cost-efficient as possible. Our team of experts will work with you to ensure that your goods are shipped safely and securely and that they arrive at their destination on time.</p>
                        </div>
                        <ul class="about-list">
                            <li>
                                <h3>34785</h3>
                                <h6>registered users</h6>
                            </li>
                            <li>
                                <h3>2623</h3>
                                <h6>per day visitors</h6>
                            </li>
                            <li>
                                <h3>189</h3>
                                <h6>total products</h6>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <!-- <div class="about-img">
                            <img src="images/about/01.jpg" alt="about">
                            <img src="images/about/02.jpg" alt="about">
                            <img src="images/about/03.jpg" alt="about">
                            <img src="images/about/04.jpg" alt="about">
                        </div> -->
                        <h3>Request Your Product<span style="color:red">*</span></h3>
                        <!-- <form class="user-form" action="" method="post"> -->
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group me-1">
                                    <input type="text" class="form-control"  name="name" id="name" placeholder="Enter Name">   
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group ">
                                        <input type="number" class="form-control"  name="phone" id="phone" placeholder="Enter Mobile No">  
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group me-2">
                                    <input type="email" class="form-control" name= "email" id="email" placeholder="Enter Email">   
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group ">
                                        <input type="text" class="form-control" name="country" id="country" placeholder="Enter Country">  
                                    </div>
                                </div>
                                   
                                    <div class="form-group">
                                        <input type="text" class="form-control"  id= "want"  name="want" placeholder="Enter the product you want">
                                    </div>
                                    <div id="snackbar">successfully Inserted</div>
                                    <div id="snackbar1">Error occured !</div>
                                 
                                    <div class="form-button">
                                        <button type="submit" name="submit" onclick="requestpro()">submit</button>
                                    </div>
                                <!-- </form> -->
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    ABOUT PART END
        =======================================-->
 <script>
    function requestpro(){
    let name= document.getElementById('name').value;
    let phone= document.getElementById('phone').value;
    let email = document.getElementById('email').value;
    let country= document.getElementById('country').value;
    let want = document.getElementById('want').value;
    var x = document.getElementById("snackbar");
    var y= document.getElementById("snackbar1");
           
   
      if(name !='' && phone != '' && email != '' && country != '' && want !='')  
      {
    $.ajax({
                    url:'request_ajax.php',
                    method:'POST',
                    data:{
                        type:'action',
                        Name:name,
                        Mobile:phone,
                        Email:email,
                        country:country,
                        wanted: want
                    },
                   success:function(data){
                    var data = JSON.parse(data);
			if(data.statusCode==200){
                x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
										
			}
			else if(data.statusCode==201){
                y.className = "show";
            setTimeout(function(){ y.className = y.className.replace("show", ""); }, 3000);
			}
			
		
                   }
                });
            }
            else{
                 y.className = "show";
            setTimeout(function(){ y.className = y.className.replace("show", ""); }, 3000);

            }

    }


 </script>


        <!--=====================================
                    CHOOSE PART START
        =======================================-->
        <section class="about-choose">
            <div class="container" style="background-color: #F1F4FA">
                <div class="row">
                    <div class="col-11 col-md-9 col-lg-7 col-xl-6 mx-auto">
                        <div class="section-heading">
                            <h2>Why people choose Delight Hub</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="choose-card">
                            <div class="choose-icon">
                                <i class="icofont-fruits"></i>
                            </div>
                            <div class="choose-text">
                                <h4>Finest Products </h4>
                                <p>We deliver the finest products from India to customers around the world. Our mission is to provide premium quality products while ensuring top-notch customer service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-card">
                            <div class="choose-icon">
                                <i class="icofont-vehicle-delivery-van"></i>
                            </div>
                            <div class="choose-text">
                                <h4>Low-Cost Shipping </h4>
                                <p>We’ve established strategic partnerships with various logistics companies around the world to ensure that our customers receive the lowest shipping rates on their orders.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-card">
                            <div class="choose-icon">
                                <i class="icofont-loop"></i>
                            </div>
                            <div class="choose-text">
                                <h4>Door Step Delivery</h4>
                                <p>We are proud to offer the finest Indian products to customers all over the world, with door step delivery.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-card">
                            <div class="choose-icon">
                                <i class="icofont-support"></i>
                            </div>
                            <div class="choose-text">
                                <h4>Hassle Free custom clearance</h4>
                                <p>We are committed to delivering hassle-free custom clearance, ensuring that our customers receive their goods in a timely and reliable manner.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    CHOOSE PART END
        =======================================-->


        <!--=====================================
                     TEAM PART START
        =======================================-->
        <section class="inner-section about-team">
            <div class="container">
                <div class="card mb-3 mt-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="./New/Group9.png" class="card-img h-100" alt="Img1">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Shop from the catalogue of India’s Bestsellers</h5>
                                <p class="class-text">India's Bestsellers catalogue is a great way to shop for the best products from India. With a wide selection of products ranging from food and apparel to home decor and electronics, India's Bestsellers has something for everyone. Plus, all orders are shipped directly from India, making it an ideal choice for those looking to get their hands on authentic Indian products without having to travel to India.</p>
                                
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Fast shipping from India to USA in 7-10 working days</h5>
                                <p class="class-text float-right"></p>
                                <p class="card-text float-right text-right">At Delight Hub, we understand the importance of fast shipping from India to USA, and we are committed to ensuring that all of our customers receive their products in a timely manner. Our team of experienced logistics professionals are dedicated to providing exceptional service and ensuring that your products arrive in 7-10 working days.
</p>
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="./New/Group 10.png" class="card-img h-100" alt="Img1">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                     TEAM PART END
        =======================================-->

        <!--=====================================
                    Banner start
        =======================================-->


        <div class="section promo-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="promo-img">
                            <a href=""><img src="./admin/masters/banner_uploads/banner2.png" alt="promo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====================================
                    Banner End
        ======================================-->

          <!--=====================================
                     TEAM PART START
        =======================================-->
        <section class="inner-section about-team">
            <div class="container">
                <div class="card mb-3 mt-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="./New/Group.png" class="card-img h-100" alt="Img1">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Your favourite product right in your doorsteps. </h5>
                                <p class="class-text">With the help of cutting-edge technology and innovative approaches to logistics, we are now able to deliver your favourite product right to your doorsteps from anywhere in the world.</p>
                                <p class="card-text">Whether you are a business looking to expand your international reach or an individual looking for a convenient way to get your favourite Indian items delivered, we can make sure that your products will reach your destination in no time.</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">No hassles of custom clearance in USA</h5>
                                <p class="class-text float-right"></p>
                                <p class="card-text float-right text-right">As one of India's leading companies delivering products overseas, we understand the importance of having a hustle-free custom clearance process at airports. This is why we have streamlined our airport custom clearance process to ensure that our customers’ goods pass through smoothly, quickly and with the least amount of hassle.</p>
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="./New/Group12.png" class="card-img h-100" alt="Img1">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                     TEAM PART END
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






