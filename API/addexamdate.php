<?php
require_once 'DbFunction.php';

$response = array ();

$exam_date = $_POST ['exam_date'];
$subject=$_POST['subject'];
$time_start = $_POST ['time_start'];
$time_ends=$_POST['time_ends'];

$add_id=0;
//echo $class_name,$capacity;
$db = new DbFunction ();
$add_id=$db->addExamTime($exam_date,$subject,$time_start,$time_ends);
if ($add_id>0) {
	$response['error']=false;
	$response['message']="created sucessfully ";
	$response["exam_id"]=$add_id;
} else {
	$response['error']=true;
	$response['message']="class room insertion failed";
}

echo json_encode($response);
?>