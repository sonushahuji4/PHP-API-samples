<?php
require_once 'DbOperation.php'

$response = array ();

$email=$_POST['email'];
$password=$_POST['password'];


$db= new DbOperation();

			$login=$db->userLogin($email,$password);
			if($login==1)
			{
				$response['code']=false;
				$response['status']="created sucessfully ";
				
			}
			else if($login==0)
			{
				$response['code']=true;
				$response['status']="user login fails ";
			}

			echo json_encode($response)

?>