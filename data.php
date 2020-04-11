<?php
//var_dump($_POST); exit;
$data = array("secret_key" => "1234", "site" => "demosite.com",'name' =>isset($_POST['name']),'email' =>isset($_POST['email']),'phone' =>isset($_POST['phone']),'subject' =>isset($_POST['subject']),'message' =>isset($_POST['message']),'type' =>isset($_POST['type']));
$data_string = json_encode($data);

$url = 'http://localhost/api.php';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json',
	'Content-Length: ' . strlen($data_string))
);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

  //$json_result = json_decode($result, true);
?>