<?php
require_once 'DbFunction.php';

$response = array ();

$class_name = $_POST ['class_name'];
$capacity=$_POST['capacity'];
$add_id=0;
//echo $class_name,$capacity;
$db = new DbFunction ();
$add_id=$db->addClassRoom($class_name,$capacity);
if ($add_id>0) {
	$response['error']=false;
	$response['message']="created sucessfully ";
	$response["class_id"]=$add_id;
} else {
	$response['error']=true;
	$response['message']="class room insertion failed";
}

echo json_encode($response);
?>