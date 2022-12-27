<?php

$zip_code=$_POST['zip_code'];
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://us-zip-code-information.p.rapidapi.com/?zipcode=$zip_code",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: us-zip-code-information.p.rapidapi.com",
		"X-RapidAPI-Key: c79330c1d4msh36309297d60cec8p108572jsnda1d601406ae"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}