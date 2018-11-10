<?php
require_once 'DbFunction.php';

$response = array ();

$class_id=$_POST['class_id'];
$db = new DbFunction ();
$status=$db->updateClassStatus($class_id,"0");
if ($status) {
	$response['error']=false;
	$response['message']="class counter reset sucessful";
} else {
	$response['error']=true;
	$response['message']="reset counter failed";
}

echo json_encode($response);
?>