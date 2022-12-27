
 
<?php require_once "registration_ajax.php"; ?>

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
        <title>delightshub - Reset Password</title>

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
        <link rel="stylesheet" href="css/user-auth.css">
</head>
<body>

<section class="user-form-part">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                        <div class="user-form-logo">
                            <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                        </div>
                        <!-- <div class="col-md-4 offset-md-4 form"> -->
                
                            <!-- <h2 class="text-center">Code Verification</h2> -->
                            <?php 
                            if(isset($_SESSION['info'])){
                                ?>
                                <div class="alert alert-success text-center">
                                    <?php echo $_SESSION['info']; ?>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="form-group">
                                <input class="form-control" type="number" name="otp" id="otp" placeholder="Enter verification code" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="password" id="password" placeholder="Enter password" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="cpassword" id="cpassword" placeholder="Enter confirm password" required>
                            </div>
                            <div class="form-button">
                            <button type="submit" name="reset" onclick="otp_and_reset_password()">Reset</button>
                            <!-- <input class="form-control button" id="submit"type="submit" name="check" value="Submit" onclick="otp_and_reset_password()"> -->
                            </div>

                        <!-- </div> -->
                        
                        <div class="user-form-footer">
                            <p>Delights Hub | &COPY; Copyright by <a href="#">Delights Hub</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                
                    <h2 class="text-center">Code Verification</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" id="otp" placeholder="Enter verification code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" id="cpassword" placeholder="Enter cpassword" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" id="submit"type="submit" name="check" value="Submit" onclick="otp_and_reset_password()">
                    </div>

            </div>
        </div>
    </div> -->
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
function otp_and_reset_password(){
	
	 var otp = $("#otp").val();
     var password = $("#password").val();
     var cpassword = $("#cpassword").val();
        if ( otp.length>0 && password.length>0 && cpassword.length>0) {
            $.ajax({
                type: "POST",
                url: "registration_ajax.php",
                data: {'otp_and_reset_password':'otp_and_reset_password',otp:otp,cpassword:cpassword,password:password},
                success: function(result){
                    var data = jQuery.parseJSON(result);
                    if(data.value=="OK"){
                        window.location.href = "login.php";
                    }else if(data.value=="NOK"){
                        alert("You've entered incorrect code!");
                    }
                    
                }
            });
        } else {
                alert("Please fill all the fields");
                
            }
	}
</script>
</body>

</html>