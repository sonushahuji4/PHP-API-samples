<?php
require_once 'DbFunction.php';

$response = array ();

$db = new DbFunction ();
$list=$db->getUnassignedListOfClassRooms();
if (!empty($list)) {
	$response['error']=false;
	$response['class_rooms']=$list;
} else {
	$response['error']=true;
	$response['message']="class room not found";
}

echo json_encode($response);
?>