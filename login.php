<!DOCTYPE html>
<html lang="en">
    <head>
        <!--=====================================
                    META TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       

        <!-- TEMPLATE META -->
        <meta name="name" content="delightshub">
        <meta name="title" content="delightshub - eCommerce">
        <meta name="keywords" content="organic, food, shop, ecommerce, store, agriculture, vegetables, webshop, farm, grocery, natural, online store">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- WEBPAGE TITLE -->
        <title>delightshub - Login</title>

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
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
        <!--=====================================
                    USER FORM PART START
        =======================================-->
        <?php
            require('dbconnection.php');
            session_start();
        
            if (isset($_POST['email'])) {
                $email = stripslashes($_REQUEST['email']);    // removes backslashes
                $email = mysqli_real_escape_string($con, $email);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($con, $password);
                // Check user is exist in the database
                $query    = "SELECT * FROM `tbl_users` WHERE email='$email'
                            AND password='" . md5($password) . "' and status='verified'";
                $result = mysqli_query($con, $query) or die(mysql_error());
                $rows = mysqli_num_rows($result);
                $users= mysqli_fetch_array($result);
                if ($rows == 1) {
                   
                    $_SESSION['email'] = $email;
                    $_SESSION['user_id'] = $users['id'];
                    $_SESSION['name'] = $users['first_name'];
               
                    // Redirect to user dashboard page
                    header("Location: index.php");
                } else {
                    echo "<div class='form'>
                        <h3>Incorrect Email/password.</h3><br/>
                        <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                        </div>";
                }
            } else {
        ?>
        <section class="user-form-part">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-7">
                        <div class="user-form-logo">
                            <a href="index.php"><img src="images/logo.png" alt="logo"></a>
                        </div>
                        <div class="user-form-card">
                            <div class="user-form-title">
                                <h2>welcome!</h2>
                                <p>Use your credentials to access</p>
                            </div>
                            <div class="user-form-group">
                                <!-- <ul class="user-form-social">
                                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>login with facebook</a></li>
                                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>login with twitter</a></li>
                                    <li><a href="#" class="google"><i class="fab fa-google"></i>login with google</a></li>
                                    <li><a href="#" class="instagram"><i class="fab fa-instagram"></i>login with instagram</a></li>
                                </ul> -->
                                <figure class="figure">
                                    <img src="login.png" class="figure-img img-fluid rounded" alt="..." width="600" height="650">
                                    <!-- <figcaption class="figure-caption text-end">A caption for the above image.</figcaption> -->
                                  </figure>
                                <div class="user-form-divider">
                                    <p><img src="./images/Favicon.svg"></p>
                                </div>
                                <form class="user-form"  method="post" name="login">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  name="email" id="email" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group ">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="lsRememberMe" id="rememberMe">
                                        <label class="form-check-label" for="check">Remember Me</label>
                                    </div>
                                    <div class="form-button col-lg-10">
                                        <button type="submit" onclick="lsRememberMe()">Log In</button>
                                        <p>Forgot your password?<a href="reset-password.php">reset here</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="user-form-remind">
                            <p>Don't have any account?<a href="register.php">register here</a></p>
                        </div>
                        <div class="user-form-footer">
                            <p>Delights Hub | &COPY; Copyright by <a href="https://rinixweb.com/">Rinixweb</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
        }
    ?>
        <!--=====================================
                    USER FORM PART END
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

        <!-- <script>

                const rmCheck = document.getElementById("rememberMe");
                emailInput = document.getElementById("email");

                if (localStorage.checkbox && localStorage.checkbox !== "") {
                rmCheck.setAttribute("checked", "checked");
                emailInput.value = localStorage.username;
                } else {
                rmCheck.removeAttribute("checked");
                emailInput.value = "";
                }

                function lsRememberMe() {
                if (rmCheck.checked && emailInput.value !== "") {
                    localStorage.username = emailInput.value;
                    localStorage.checkbox = rmCheck.value;
                } else {
                    localStorage.username = "";
                    localStorage.checkbox = "";
                }
                }
            </script> -->
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>
</html>