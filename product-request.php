
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
        <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
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
                            <h2>Our Motive is to Provide Best for Those Who Deserve</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis exercitationem commodi aliquam necessitatibus vero reiciendis quaerat illo est fuga ea temporibus natus doloremque ipsum voluptas quod deserunt expedita reprehenderit pariatur quidem quisquam, recusandae animi non! Voluptas totam repudiandae rerum molestiae possimus quis numquam sapiente sunt architecto quisquam Aliquam odio optio</p>
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
                            <h2>Why choose Delights Hub</h2>
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
                                <h4>100% fresh organic food</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error dignissimo cumque minus facere dolores cupiditate debitis</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-card">
                            <div class="choose-icon">
                                <i class="icofont-vehicle-delivery-van"></i>
                            </div>
                            <div class="choose-text">
                                <h4>Delivery within one hour</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error dignissimo cumque minus facere dolores cupiditate debitis</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-card">
                            <div class="choose-icon">
                                <i class="icofont-loop"></i>
                            </div>
                            <div class="choose-text">
                                <h4>quickly return policy</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error dignissimo cumque minus facere dolores cupiditate debitis</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-card">
                            <div class="choose-icon">
                                <i class="icofont-support"></i>
                            </div>
                            <div class="choose-text">
                                <h4>instant support team</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error dignissimo cumque minus facere dolores cupiditate debitis</p>
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
                            <img src="https://source.unsplash.com/random/1280x720" class="card-img h-100" alt="Img1">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Tender Authority </h5>
                                <p class="class-text">#909888R00Ch</p>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione possimus dolore distinctio esse nemo quasi, vel minima magni! Quas harum est cupiditate architecto, rem accusantium adipisci sed sunt aliquam odio.</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="class-text float-right">#909888R00Ch</p>
                                <p class="card-text float-right text-right">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione possimus dolore distinctio esse nemo quasi, vel minima magni! Quas harum est cupiditate architecto, rem accusantium adipisci sed sunt aliquam odio.</p>
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="https://source.unsplash.com/random/1280x720" class="card-img h-100" alt="Img1">
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
                            <img src="https://source.unsplash.com/random/1280x720" class="card-img h-100" alt="Img1">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Tender Authority </h5>
                                <p class="class-text">#909888R00Ch</p>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione possimus dolore distinctio esse nemo quasi, vel minima magni! Quas harum est cupiditate architecto, rem accusantium adipisci sed sunt aliquam odio.</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="class-text float-right">#909888R00Ch</p>
                                <p class="card-text float-right text-right">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione possimus dolore distinctio esse nemo quasi, vel minima magni! Quas harum est cupiditate architecto, rem accusantium adipisci sed sunt aliquam odio.</p>
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="https://source.unsplash.com/random/1280x720" class="card-img h-100" alt="Img1">
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






