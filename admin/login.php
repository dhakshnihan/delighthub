<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themekita.com/demo-atlantis-bootstrap/livepreview/examples/demo2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 13:09:48 GMT -->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="https://themekita.com/demo-atlantis-bootstrap/livepreview/examples/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.css">
</head>

<?php
    require('dbconnection.php');
    session_start();
    if (isset($_POST['submit'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `tbl_admin_users` WHERE admin_name='$username'
                     AND password='" . md5($password) . "'";
                     echo $query;
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>


<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
                <h3 class="text-center">Sign In To Admin</h3>
                <form class="form" method="post" name="login">
                    <div class="login-form">
                        <div class="form-group form-floating-label">
                            <input id="username" name="username" type="text" class="form-control input-border-bottom" placeholder="Username" required>
                        </div>
                        <div class="form-group form-floating-label">
                            <input id="password" name="password" type="password" class="form-control input-border-bottom"  placeholder="Password" required>
                        </div>
                        <div class="form-action mb-3">
                            <input type="submit" value="Login" name="submit" class="btn btn-primary btn-rounded login-button"/>
                        </div>
                        <div class="login-account">
                            <span class="msg">Don't have an account yet ?</span>
                            <a href="registration.php" id="show-signup" class="link">Sign Up</a>
                        </div>
                    </div>
                </form>
		</div>
	</div>
    
    <?php
        }
    ?>


	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/atlantis.min.js"></script>
</body>

<!-- Mirrored from themekita.com/demo-atlantis-bootstrap/livepreview/examples/demo2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 13:09:48 GMT -->
</html>