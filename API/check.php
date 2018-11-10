<?php
$response = array ();

$a= $_POST ['username'];
$b=$_POST['password'];

if ($a=='kouchan' && $b=='1234') {
	$response['message']="valid username and password";
} else {
	$response['message']="please enter valid username and password";
}

echo json_encode($response);
?>