<?php session_start();   ?>
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
        <!-- <meta name="author" content="mironcoder">
        <meta name="email" content="mironcoder@gmail.com">
        <meta name="profile" content="https://themeforest.net/user/mironcoder"> -->

        <!-- TEMPLATE META -->
        <meta name="name" content="delights Hub">
        <meta name="title" content="delights Hub  - eCommerce">
        <meta name="keywords" content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, webshop, farm, grocery, natural, online store">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- WEBPAGE TITLE -->
        <title>Delights Hub - Address</title>

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
        <section class="user-form-part">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-8">
                        <div class="user-form-logo">
                            <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                        </div>
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
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First name">   
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last name">  
                                    </div>
                                </div>
                                </div>
                                    <form action="#" id="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="address" name="address"  placeholder="Enter your Address" >
                                        <span id="text"></span>
                                    </div>
                                       </form>
                                    <div class="form-group">
                                        <input type="type" class="form-control" id="landmark" name="landmark" placeholder="Enter your landmark" >
                                    </div>
                                <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group me-1">
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter city">   
                                    </div>
                                  </div>
                             
                                <div class="col-lg-6">
                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="zip" name="zip" placeholder="Enter Zip code">  
                                    </div>
                                </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="type" class="form-control" id="state" name="state" placeholder="Enter your state" >
                                    </div>

                                    <div class="form-group">
                                        <input type="type" class="form-control" id="country" name="country" placeholder="Enter your country" >
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>Choose Image :</div>
                                            <div>
                                                <input type="file" class="file-image" name="file_image"  onchange="loadImageFile(event,this)" accept="image/jpeg">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <img id="ImageFile" width="150" height="150" />
                                        </div>
                                    </div>   
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>Choose Sign :</div>
                                            <div>
                                                <input type="file" class="file-sign" name="file_sign" id="file_sign"  onchange="loadSignFile(event,this)"  accept="image/jpeg">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <img id="SignFile" width="150" height="150" />
                                        </div>
                                    </div>  
                                        <span id="address_type"><input  type="hidden" id="address_value" name="address_value" value=""></span>
                                    <div class="view-list-group">
                                    
                                    <ul class="view-tag-list">
                                        <li><button type="button" class="btn btn-outline-success " id="myfunction_address_home" onclick="myfunction_ofc()">Home</button></li>
                                        <li><button type="button" class="btn btn-outline-success " id="myfunction_address_ofc" onclick="myfunction_home()">Office</button></li>
                                    </ul>
                                    
                                </div>
                                  
                                    <div class="form-button">
                                        <button type="submit" name="Register" id="submit" value="Register"  >register</button>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        </form>
                        
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
                     var address_value=$("#address_value").val();
                    if ( first_name.length>0 && last_name.length>0 && address.length>0 && landmark.length>0 && city.length>0 && zip.length>0 && state.length>0 && country.length>0  && address_value.length>0) {
                       form.submit();
                        return true;  
                    }else{
                        alert("Please fill all the fields.");
                        return false;  
                    }
            }  
                 
                //   function address_form(){   
                    
                //     var first_name = $("#first_name").val();
                //     var last_name = $("#last_name").val();
                //     var address = $("#address").val();
                //     var landmark = $("#landmark").val();
                //     var city = $("#city").val();
                //     var zip=$("#zip").val();
                //     var state=$("#state").val();
                //     var country=$("#country").val();
                //     var user_id=$("#user_id").val();
                //     var pro= false;
                //     var gg=false;
                //     if($("input[type='checkbox']").is(":checked")){

                //          var gg=true;

                //     } else{

                //         alert("Please Accept all the Terms & Conditions");
                //         return false;
                //     }
                    
                //     if ( first_name.length>0 && last_name.length>0 && address.length>0 && landmark.length>0 && city.length>0 && zip.length>0 && state.length>0 && country.length>0  && address_value.length>0) {
                //         pro=true;
                //     } 


                //     else {
                //             alert("Please fill all the fields.");
                //             return false;
                            
                //         }
                //         if(gg==true && pro==true)
                //         $.ajax({
                //             type: "POST",
                //             url: "registration_ajax.php",
                //             data: {type:'address_form',first_name:first_name,last_name:last_name,address:address,landmark:landmark,city:city,zip:zip,state:state,country:country,user_id:user_id},
                //             success: function(result){
                //                 var data = jQuery.parseJSON(result);
                //                 if(data.value=="OK"){
                //                     window.location.href = "product_summary.php";
                //                 }
                                
                //             }
                //         });
                   

                //     }
                   

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