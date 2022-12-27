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
        <title>Delightshub - Profile</title>

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
        <link rel="stylesheet" href="css/profile.css">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
       <?php include("header.php"); ?>
        


        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
            <div class="container">
                <h2>my profile</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">profile</li>
                </ol>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                    PROFILE PART START
        =======================================-->
        <section class="inner-section profile-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h4>Your Profile</h4>
                                <!-- <button data-bs-toggle="modal" data-bs-target="#profile-edit">edit profile</button> -->
                            </div>
                            <?php 
                                $sqlx="select * from tbl_users where id='".$_SESSION['user_id']."'";
                                $resultx=mysqli_query($con,$sqlx);
                                $rowx=mysqli_fetch_array($resultx);
                                $first_name=$rowx['first_name'];
                                $last_name=$rowx['last_name'];
                                $email=$rowx['email'];
                            ?>
                            <div class="account-content">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="profile-image">
                                            <a href="#"><img src="images/user.png" alt="user"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">User Name</label>
                                            <input class="form-control" type="text" name="first_name" id="first_name" value="<?php echo $first_name.' '.$last_name; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="email" id="email" name="email" value="<?php echo $email; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="profile-btn">
                                            <a href="change-password.php?user_id=<?php echo $_SESSION['user_id']; ?>">change password</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h4>delivery address</h4>
                                <!-- <button class="profile-btnd" title="Add This" data-bs-toggle="modal" data-bs-target="#address-add">Add Address</button> -->
                            </div>
                            <div class="account-content">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 alert fade show">
                                    <?php 

                                            $sql="select * from tbl_address where fk_user_id='".$_SESSION['user_id']."'";
                                            // echo $sql;
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    PROFILE PART END
        =======================================-->


       

        <!-- address add form -->
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
                                                <input type="file" class="file-image" name="file_image" id="file_image"  value="<?php echo $image_name; ?>" onchange="loadImageFile(event)" accept="image/jpeg">
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
                    MODAL EDIT FORM START
        =======================================-->
        <!-- profile edit form -->
        <div class="modal fade" id="profile-edit">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>edit profile info</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">profile image</label>
                            <input class="form-control" type="file">
                        </div>
                        <div class="form-group">
                            <label class="form-label">name</label>
                            <input class="form-control" type="text" value="Miron Mahmud">
                        </div>
                        <div class="form-group">
                            <label class="form-label">email</label>
                            <input class="form-control" type="text" value="mironcoder@gmail.com">
                        </div>
                        <button class="form-btn" type="submit">save profile info</button>
                    </form>
                </div> 
            </div> 
        </div>

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
                     FOOTER PART START
        =======================================-->
        <?php include("footer.php"); ?>
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
                        var file_image=$("#file_image").val();
                         var file_sign=$("#file_sign").val();
                        var address_value=$("#address_value").val();
                        if ( first_name.length>0 && last_name.length>0 && address.length>0 && landmark.length>0 && city.length>0 && zip.length>0 && state.length>0 && country.length>0 
                        && file_sign.length>0 && file_image.length>0 && address_value.length>0) {
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






