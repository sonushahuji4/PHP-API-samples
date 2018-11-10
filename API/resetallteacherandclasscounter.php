<?php
require_once 'DbFunction.php';

$response = array ();

$db = new DbFunction ();
$status=$db->reSetcounter();
if ($status) {
	$response['error']=false;
	$response['message']="all counter reset sucessful";
} else {
	$response['error']=true;
	$response['message']="reset counter failed";
}

echo json_encode($response);
?>