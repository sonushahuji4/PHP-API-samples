<?php
require_once 'DbFunction.php';

$response = array ();

$db = new DbFunction ();
$list=$db->getUnassignedListOfTeacher();
if (!empty($list)) {
	$response['error']=false;
	$response['teachers']=$list;
} else {
	$response['error']=true;
	$response['message']="teachers not found";
}

echo json_encode($response);
?>