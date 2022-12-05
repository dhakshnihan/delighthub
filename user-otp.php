
 
<?php require_once "registration_ajax.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
    
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
</head>
<body>
    <div class="container">
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
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" id="otp" placeholder="Enter verification code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" id="submit"type="submit" name="check" value="Submit" onclick="verify_otp()">
                    </div>

            </div>
        </div>
    </div>
<script>
function verify_otp(){
	
	 var otp = $("#otp").val();
        if ( otp.length>0) {
            $.ajax({
                type: "POST",
                url: "registration_ajax.php",
                data: {type:'check-otp',otp:otp},
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