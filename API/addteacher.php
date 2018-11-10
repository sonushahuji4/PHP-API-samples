<?php
require_once 'DbFunction.php';

$response = array ();

$name = $_POST ['name'];
$department=$_POST['department'];
$pos=$_POST['pos'];

$add_id=0;
//echo $class_name,$capacity;
$db = new DbFunction ();
$add_id=$db->addTeacher($name,$department,$pos);
if ($add_id>0) {
	$response['error']=false;
	$response['message']="User added successfully";
	$response["teacher_id"]=$add_id;
} else {
	$response['error']=true;
	$response['message']="Error while adding users";
}

echo json_encode($response);
?>