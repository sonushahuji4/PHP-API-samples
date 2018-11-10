<?php
require_once 'DbFunction.php';

$response = array ();

$date_id = $_POST ['date_id'];
$class_id=$_POST['class_id'];
$teacher_id = $_POST ['teacher_id'];

//echo $class_name,$capacity;
$db = new DbFunction ();
$status=$db->assginTeacherTOClassROom($date_id,$class_id,$teacher_id);
if ($status) {
	$response['error']=false;
	$response['message']="assigned sucessfully ";
	$db->updateTeacherStatus($teacher_id,"1");
	$db->updateClassStatus($class_id,"1");
} else {
	$response['error']=true;
	$response['message']="assigned failed";
}

echo json_encode($response);
?>