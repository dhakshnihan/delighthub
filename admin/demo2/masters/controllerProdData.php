<?php
error_reporting(0);
    include("./../dbconnection.php");
    
    //Brands Added 
    if(isset($_POST['add_brands'])){
        $sql="insert into tbl_brands(BRAND01,BRAND02) values ('".$_POST['brand_name']."','Active')";
        mysqli_query($con,$sql);
       
    }

     //Brands Edit
     if(isset($_POST['edit_brands'])){
        $sql="update tbl_brands set BRAND01='".$_POST['brand_name']."',BRAND02='".$_POST['status']."' where BRANDTID='".$_POST['brand_id']."'";
        // echo $sql;
        mysqli_query($con,$sql);
       
    }

     //Brands delete
     if(isset($_POST['delete_brands'])){
        $sql="delete from tbl_brands where BRANDTID='".$_POST['brand_id']."'";
        // echo $sql;
        mysqli_query($con,$sql);
    }

    //Category Added
    if(isset($_POST['add_category'])){
        $sql="insert into tbl_category(CATEG01,CATEG02) values ('".$_POST['category_name']."','Active')";
        mysqli_query($con,$sql);
      
    }

     //Category Edit
     if(isset($_POST['edit_category'])){
        $sql="update tbl_category set CATEG01='".$_POST['category_name']."',CATEG02='".$_POST['status']."' where CATEGTID='".$_POST['category_id']."'";
        // echo $sql;
        mysqli_query($con,$sql);
    }
    //category delete
    if(isset($_POST['delete_category'])){
        $sql="delete from tbl_category where CATEGTID='".$_POST['category_id']."'";
        // echo $sql;
        mysqli_query($con,$sql);
    }

     //Products Added
     if(isset($_POST['submit'])){

      

        $filename = $_FILES['uploadImg']['name'];
    
        $uploadPath = "prod_uploads/";
        $targetPath = $uploadPath . basename( $_FILES['uploadImg']['name']);
		  
		  $tempPath=$_FILES["uploadImg"]["tmp_name"]; 
		  // Setup our new file path
		
		  // File is uploaded to temp dir
		  if(move_uploaded_file($tempPath, $targetPath)) {
            $sql="insert into tbl_products(PRODN01,PRODN02,PRODN03,PRODN04,PRODN05,PRODN06,PRODN07,PRODN08,PRODN09) values
            ('".$_POST['prod_name']."','".$_POST['prod_code']."','".$_POST['category_id']."','".$_POST['brand_id']."','".$_POST['prod_des']."','".$_POST['prod_price']."','".$filename."','Active',now())";
            // echo $sql;
            mysqli_query($con,$sql);
            echo "<script>
            alert('Inserted successfully.');
            window.location='prod_master_view.php';
        </script>";
		  }
          
       
    }
    
     //Products Added
     if(isset($_POST['submit_edit'])){

      

        $filename = $_FILES['uploadImg']['name'];
    
        $uploadPath = "prod_uploads/";
        $targetPath = $uploadPath . basename( $_FILES['uploadImg']['name']);
		  
		  $tempPath=$_FILES["uploadImg"]["tmp_name"]; 
		  // Setup our new file path
		
		  // File is uploaded to temp dir
		  if(move_uploaded_file($tempPath, $targetPath)) {
            $sql="update tbl_products set PRODN01='".$_POST['prod_name']."',PRODN02='".$_POST['prod_code']."',PRODN03='".$_POST['category_id']."',PRODN04='".$_POST['brand_id']."',
            PRODN05='".$_POST['prod_des']."',PRODN06='".$_POST['prod_price']."',PRODN07='".$filename."',PRODN08='".$_POST['status']."',PRODN09=now() where PRODTID='".$_POST['prod_id']."'";
            // echo $sql;
            mysqli_query($con,$sql);

            echo "<script>
                alert('Updated successfully.');
                window.location='prod_master_view.php';
            </script>";
		  }
          
       
    }

    //product delete
    if(isset($_POST['delet_products'])){
        $sql="delete from tbl_products where PRODTID='".$_POST['prod_id']."'";
        // echo $sql;
        mysqli_query($con,$sql);
    }

?>