<?php
 require('dbconnection.php');
$errors = array();
if($_POST['type']=='registration'){

// When form submitted, insert values into the database.
$value = "";
     $sqlx = "SELECT * FROM tbl_admin_users WHERE admin_name = '".$_POST['admin_name']."'";
    $res = mysqli_query($con, $sqlx);
        if(mysqli_num_rows($res) > 0){
            $value = "exist";
        }
          
            $admin_name =$_POST['admin_name'];
            $password = $_POST['password'];
            $confirm_pass = $_POST['confirm_pass'];
            if(count($errors) === 0){
            $query    = "INSERT into `tbl_admin_users` (admin_name, password,confirmpassword) VALUES ('$admin_name', '" . md5($password) . "','" . md5($confirm_pass) . "')";
            // echo $query;
            $value = "OK";
            $result   = mysqli_query($con, $query);
        
            
        }
        $data = array(
            'status' => 'OK',
            'value' => $value
        );
        echo json_encode($data);
    }
?>