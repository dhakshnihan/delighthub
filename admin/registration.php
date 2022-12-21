<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themekita.com/demo-atlantis-bootstrap/livepreview/examples/demo2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 13:09:48 GMT -->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

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
<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Sign Up To Admin</h3>
			<div class="login-form">
				<div class="form-group form-floating-label">
					<input  id="admin_name" name="admin_name" type="text" class="form-control input-border-bottom" placeholder="User Name" required>
				</div>
				<div class="form-group form-floating-label">
					<input  id="password" name="password" type="password" class="form-control input-border-bottom" placeholder="Password"  required>
					
				</div>
				<div class="form-group form-floating-label">
					<input id="confirm_pass" name="confirm_pass" placeholder="Re-Password"  onkeyup="validate_password()" type="password"placeholder="Re-Password"  class="form-control input-border-bottom" required>
					
				</div>
                <span id="wrong_pass_alert"></span>
				<div class="form-action">
					<a href="#" id="show-signin" class="btn btn-danger btn-link btn-login mr-3">Cancel</a>
                    <input type="submit" name="submit" id="submit" value="Register" class="btn btn-primary btn-rounded btn-login">
				</div>
			</div>
			</div>
		</div>
	</div>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/atlantis.min.js"></script>
</body>

<script>
	function validate_password() {
 
		var pass = document.getElementById('password').value;
		var confirm_pass = document.getElementById('confirm_pass').value;
		if (pass != confirm_pass) {
			document.getElementById('wrong_pass_alert').style.color = 'red';
			document.getElementById('wrong_pass_alert').innerHTML
			  = '☒ Use same password';
			// document.getElementById('create').disabled = true;
			// document.getElementById('create').style.opacity = (0.4);
		} else {
			document.getElementById('wrong_pass_alert').style.color = 'green';
			document.getElementById('wrong_pass_alert').innerHTML =
				'🗹 Password Matched';
			// document.getElementById('create').disabled = false;
			// document.getElementById('create').style.opacity = (1);
		}
	}

	
$(document).ready(function(){
	$("#submit").click(function(){
	var admin_name = $("#admin_name").val();
	var password = $("#password").val();
	var confirm_pass = $("#confirm_pass").val();
	if (password.length>0 && confirm_pass.length>0  && admin_name.length>0) {
		$.ajax({
			type: "POST",
			url: "registration_ajax.php",
			data: {type:'registration',admin_name:admin_name
			,password:password,confirm_pass:confirm_pass},
			success: function(result){
				var data = jQuery.parseJSON(result);
				 if(data.value=="OK"){
					 window.location.href = "index.php";
				  }else if(data.value=="exist"){
					alert("User already exist!");
				  }
				
			}
		});
	} else {
			alert("Please fill all the fields");
			
		}
	});
	
});
				
</script>

</body>
</html>

