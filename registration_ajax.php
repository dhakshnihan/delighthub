<?php
	session_start();
	 require('dbconnection.php');
	$errors = array();
	if($_POST['type']=='registration'){
   
    // When form submitted, insert values into the database.
	$value = "";
		 $sqlx = "SELECT * FROM tbl_users WHERE email = '".$_POST['email']."'";
		$res = mysqli_query($con, $sqlx);
			if(mysqli_num_rows($res) > 0){
				$value = "exist";
				$errors['email'] = "Email that you have entered is already exist!";
			}
				$code = rand(999999, 111111);
				$status = "notverified";
				$first_name =$_POST['first_name'];
				$email    = $_POST['email'];
				$password = $_POST['password'];
				$confirm_pass = $_POST['confirm_pass'];
				$last_name = $_POST['last_name'];
				$create_datetime = date("Y-m-d H:i:s");
				if(count($errors) === 0){
				$query    = "INSERT into `tbl_users` (first_name,last_name, password,confirm_password,email,code,status, create_datetime) VALUES ('$first_name','$last_name', '" . md5($password) . "','" . md5($confirm_pass) . "', '$email','$code','$status','$create_datetime')";
				// echo $query;
				$value = "OK";
						 
				$result   = mysqli_query($con, $query);
				if($result == true){
				 $subject = "Email Verification Code";
				$message = "Your verification code is $code \n";
				$message .= "Your  Email ID: $email";
				$sender = "From: info@strongbuildetenders.com";
				// $result_mail = mail($email, $subject, $message, $sender);
				 $info = "We've sent a verification code to your Email - $email";
				 $_SESSION['info'] = $info;
				// if($result_mail == true){
				}
				
			}
			$data = array(
				'status' => 'OK',
				'value' => $value
			);
			echo json_encode($data);
		}
		
		//if user click verification code submit button
		if($_POST['type']=="check-otp"){
        $value="";
        $otp_code = $_POST['otp'];
        $check_code = "SELECT * FROM tbl_users WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE tbl_users SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res==true){
            
                $_SESSION['email'] = $email;
                $value="OK";
            }
        }else{
            $value="NOK";
        }
		$data = array(
			'status' => 'OK',
			'value' => $value
		);
		echo json_encode($data);
    }
    

	

    
	
?>