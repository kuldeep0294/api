<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tuts_rest";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) {
	echo "connection failed";
}

$fp = fopen('php://input', 'r');
$rawData = stream_get_contents($fp);

echo "<pre>";
print_r($rawData);
echo "</pre>";

$a = json_decode($rawData, true);
if ($a['secret_key'] == '1234') {
	if ($a['type']== 'insert') {
		$sql = "INSERT INTO `users` (`name`,`email`,`phone`,`subject`,`message`) VALUES ('".$a['name']."','".$a['email']."','".$a['phone']."','".$a['subject']."','".$a['message']."')";
		$result = mysqli_query($conn,$sql);	
		if ($result == true) {
			echo "successfully inserted";
		}
		else{
			echo  "failed insertion";
		}
	}
	else{
		$sql="SELECT * FROM `users`";
		$result=mysqli_query($conn,$sql);
		while($sqldata=mysqli_fetch_assoc($result)){
			echo "<pre>";
			print_r($sqldata);
			echo "</pre>";
		}	
	}

}
else{
	echo "you are not authorized to this site";
} exit;

 /*if($rawData):
 echo json_encode(array('ConfirmationCode' => 'somecode'));;
 else:
 echo json_encode(array('ConfirmationCode' => 'none'));
endif;*/

?>