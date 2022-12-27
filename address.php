
 <?php include('header.php');?>
   

  <!-- address edit form -->
  <div >
            <div class="container"> 
                <div class="row">
                    <!-- <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button> -->
                    <form id="frm-image-upload" action="address_ajax.php"  method="POST" enctype = "multipart/form-data" onsubmit="return validateform()">
                        <div class="user-form-card">
                            <div class="user-form-title">
                                <h2>ADDRESS</h2>
                                <p>Setup A New Account In A Minute</p>
                            </div>
                            <div class="user-form-group">
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
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="" placeholder="Enter First name">   
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="last_name" name="last_name" value="" placeholder="Enter Last name">  
                                    </div>
                                </div>
                                </div>
                                    <form action="#" id="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="address" name="address"  value="" placeholder="Enter your Address" >
                                        <span id="text"></span>
                                    </div>
                                       </form>
                                    <div class="form-group">
                                        <input type="type" class="form-control" id="landmark" name="landmark" value="" placeholder="Enter your landmark" >
                                    </div>
                                <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group me-1">
                                    <input type="text" class="form-control" id="city" name="city" value="" placeholder="Enter city">   
                                    </div>
                                  </div>
                             
                                <div class="col-lg-6">
                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="zip" name="zip" value="" placeholder="Enter Zip code" onchange="getLocation(this.value)">  
                                    </div>
                                </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="type" class="form-control" id="state" name="state" value="" placeholder="Enter your state" >
                                    </div>

                                    <div class="form-group">
                                        <input type="type" class="form-control" id="country" name="country" value="" placeholder="Enter your country" >
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>Choose Image :</div>
                                            <div>
                                                <input type="file" class="file-image" name="file_image" id="file_image"  value="" onchange="loadImageFile(event)" accept="image/jpeg">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <img id="ImageFile" width="150" height="150" src=""/>
                                        </div>
                                    </div>   
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>Choose Sign :</div>
                                            <div>
                                                <input type="file" class="file-sign" name="file_sign" id="file_sign"  value="" onchange="loadSignFile(event)"  accept="image/jpeg">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <img id="SignFile" width="150" height="150" src=""/>
                                        </div>
                                    </div>  
                                    <span id="address_type"><input  type="hidden" id="address_value" name="address_value" value=""></span>
                                    <div class="view-list-group">
                                    
                                    <ul class="view-tag-list">
                                     
                                            <li><button type="button" class="btn btn-outline-success" id="myfunction_address_home" onclick="myfunction_ofc()" >Home</button></li>
                                          <li><button type="button" class="btn btn-outline-success " id="myfunction_address_ofc" onclick="myfunction_home()">Office</button></li>
                                      
                                        
                                    </ul>
                                    
                                </div>
                                  
                                    <div class="form-button">
                                        <button type="submit" name="Register" id="submit" value="Register"  >Register</button>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </form>
                </div> 
            </div> 
        </div>
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

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script>
            function getLocation(zip_code){
                $.ajax({
                    url:"zip_code.php",
                    method:"POST",
                    data:{zip_code:zip_code},
                    success:function(response){
                        var data = jQuery.parseJSON(response);
                        // console.log(data);
                        if(data.length>0){
                            city.value =  data[0]['City'];
                            state.value = data[0]['State'];
                            country.value = data[0]['County'];

                        }

                        // var obj = JSON.parse(data);
                        //     alert(obj);
                        // var products = document.getElementById("city");
                        //  city.innerHTML = data;
                    }
                })
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






