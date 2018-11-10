<?php
require_once 'DbFunction.php';

$response = array ();

$teacher_id=$_POST['teacher_id'];
$db = new DbFunction ();
$status=$db->updateTeacherStatus($teacher_id,"0");
if ($status) {
	$response['error']=false;
	$response['message']="teacher counter reset sucessful";
} else {
	$response['error']=true;
	$response['message']="reset counter failed";
}

echo json_encode($response);
?>