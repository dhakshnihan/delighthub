<?php

    include('dbconnection.php');
    $url  = "https://www.google.com/search?q=INR+to+USD";
	$get = file_get_contents($url);
	$data = preg_split('/\D\s(.*?)\s=\s/',$get);
	$exhangeRate = (float) substr($data[1],0,7);

    $sql="update tbl_currency set exchange_rate='".$exhangeRate."' where currency_name='USD'";
    mysqli_query($con,$sql);


    $url1  = "https://www.google.com/search?q=INR+to+Pound";
	$get1 = file_get_contents($url1);
	$data1 = preg_split('/\D\s(.*?)\s=\s/',$get1);
	$exhangeRate1 = (float) substr($data1[1],0,7);

    $sql1="update tbl_currency set exchange_rate='".$exhangeRate1."' where currency_name='Pound'";
    mysqli_query($con,$sql1);

?>