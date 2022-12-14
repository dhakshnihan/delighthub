<?php
 include ('dbconnection.php');
  if(isset($_POST['type'])=='action'){

    $name= $_POST['Name'];
    $mobile= $_POST['Mobile'];
    $email=$_POST['Email'];
    $country = $_POST['country'];
    $wanted = $_POST['wanted'];
  $sql= "insert into `requst_product` (Name,Mobile,Email,country,wanted) values ('$name','$mobile','$email','$country','$wanted')";
  if (mysqli_query($con, $sql)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($con);
  }



?>