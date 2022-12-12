<?php
include("dbconnection.php");

    if(isset($_POST['Register'])){
        //Address insert section 
        $file_image = $_FILES['file_image']['name'];
        $file_sign = $_FILES['file_sign']['name'];
       $target_file_image = "uploads_address/" . basename($_FILES["file_image"]["name"]);
       $target_file_sign = "uploads_address/" . basename($_FILES["file_sign"]["name"]);
       if (move_uploaded_file($_FILES["file_image"]["tmp_name"], $target_file_image)) {

           if (move_uploaded_file($_FILES["file_sign"]["tmp_name"], $target_file_sign)) {

               $sql="insert into tbl_address (fk_user_id,first_name,last_name,address,address_type,landmark,city,zip,state,country,image,sign) values ('".$_POST['user_id']."','".$_POST['first_name']."','".$_POST['last_name']."',
               '".$_POST['address']."','".$_POST['address_type']."','".$_POST['landmark']."','".$_POST['city']."','".$_POST['zip']."','".$_POST['state']."','".$_POST['country']."','".$file_image."','".$file_sign."')";
               mysqli_query($con,$sql);

               echo "<script>
                       alert('Inserted successfully.');
                       window.location='product_summary.php';
                   </script>";
           }
       }
    }
    
    if(isset($_POST['Update'])){
        //Address insert section 
        $file_image = $_FILES['file_image']['name'];
        $file_sign = $_FILES['file_sign']['name'];
       $target_file_image = "uploads_address/" . basename($_FILES["file_image"]["name"]);
       $target_file_sign = "uploads_address/" . basename($_FILES["file_sign"]["name"]);
      
       if (move_uploaded_file($_FILES["file_image"]["tmp_name"], $target_file_image)) {
      
           if (move_uploaded_file($_FILES["file_sign"]["tmp_name"], $target_file_sign)) {
       
           }
       }

           
       $sql="update tbl_address set first_name='".$_POST['first_name']."',last_name='".$_POST['last_name']."',address='".$_POST['address']."',landmark='".$_POST['landmark']."',
       city='".$_POST['city']."',zip='".$_POST['zip']."',state='".$_POST['state']."',country='".$_POST['country']."',image='".$file_image."',sign='".$file_sign."' where fk_user_id='".$_POST['user_id']."'";
        mysqli_query($con,$sql);

       echo "<script>
               alert('Inserted successfully.');
               window.location='product_summary.php';
           </script>";
    }

	

?>