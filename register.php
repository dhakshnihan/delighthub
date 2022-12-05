<!DOCTYPE html>
<html lang="en">
    <head>
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
        <title>Greeny - Register</title>

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <!-- FAVICON -->
        <link rel="icon" href="images/Favicon.svg">

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
        <link rel="stylesheet" href="css/user-auth.css">
        <style>
           
            .form {
                margin: 50px auto;
                width: 300px;
                padding: 30px 25px;
                background: white;
            }
            h1.login-title {
                color: #666;
                margin: 0px auto 25px;
                font-size: 25px;
                font-weight: 300;
                text-align: center;
            }
            .login-input {
                font-size: 15px;
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 25px;
                height: 25px;
                width: calc(100% - 23px);
            }
            .login-input:focus {
                border-color:#6e8095;
                outline: none;
            }
            .login-button {
                color: #fff;
                background: #55a1ff;
                border: 0;
                outline: 0;
                width: 100%;
                height: 50px;
                font-size: 16px;
                text-align: center;
                cursor: pointer;
            }
            .link {
                color: #666;
                font-size: 15px;
                text-align: center;
                margin-bottom: 0px;
            }
            .link a {
                color: #666;
            }
            h3 {
                font-weight: normal;
                text-align: center;
            }

        </style>
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
        <!--=====================================
                    USER FORM PART START
        =======================================-->
        <section class="user-form-part">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-8">
                        <div class="user-form-logo">
                            <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                        </div>
                        <div class="user-form-card">
                            <div class="user-form-title">
                                <h2>Join Now!</h2>
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
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First name">   
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last name">  
                                    </div>
                                </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email"  placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="confirm_pass" name="confirm_pass"   placeholder="Enter Re-Password"  onkeyup="validate_password()">
                                    </div>
                                    <div class="form-group">
                                         <span id="wrong_pass_alert"></span>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="check">
                                        <label class="form-check-label" for="check">Accept all the <a href="#">Terms & Conditions</a></label>
                                    </div>
                                    <div class="form-button">
                                        <button type="submit" name="submit" id="submit" value="Register" onclick="registration_form()" >register</button>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <div class="user-form-remind">
                            <p>Already Have An Account?<a href="login.php">login here</a></p>
                        </div>
                        <div class="user-form-footer">
                            <p>Delight Hub | &COPY; Copyright by <a href="#">Delights Hub</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    USER FORM PART END
        =======================================-->


        <script>
            function validate_password() {
                // alert("test");
                var pass = document.getElementById('password').value;
                var confirm_pass = document.getElementById('confirm_pass').value;
                if (pass != confirm_pass) {
                    document.getElementById('wrong_pass_alert').style.color = 'red';
                    document.getElementById('wrong_pass_alert').innerHTML
                    = '☒ Use same password';
                   
                } else {
                    document.getElementById('wrong_pass_alert').style.color = 'green';
                    document.getElementById('wrong_pass_alert').innerHTML =
                        '🗹 Password Matched';
                  
                }
            }

                 
                  function registration_form(){
                        alert("test");
                    var first_name = $("#first_name").val();
                    var last_name = $("#last_name").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var confirm_pass = $("#confirm_pass").val();
                    if (password.length>0 && confirm_pass.length>0 && email.length>0 && first_name.length>0 && last_name.length>0) {
                        $.ajax({
                            type: "POST",
                            url: "registration_ajax.php",
                            data: {type:'registration',first_name:first_name,email:email
                            ,password:password,confirm_pass:confirm_pass,last_name:last_name},
                            success: function(result){
                                var data = jQuery.parseJSON(result);
                                if(data.value=="OK"){
                                    window.location.href = "user-otp.php";
                                }else if(data.value=="exist"){
                                    alert("Email no already exist!");
                                }else{
                                    alert("Please try again!");
                                }
                                
                            }
                        });
                    } else {
                            alert("Please fill all the fields");
                            
                        }
                    }
                    
              
        </script>

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