<?php
require_once 'DbOperation.php'

$response = array ();

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];


$db= new DbOperation();

			$login=$db->createUser($name,$mobile,$email,$password);
			if($login==1)
			{
				$response['code']=false;
				$response['status']="created sucessfully ";
				
			}
			else if($login==0)
			{
				$response['code']=true;
				$response['status']="error while registering user";
			}
			else if($new_user==2)
			{
				$response['code']=true;
				$response['status']="user already exits";
			}

			echo json_encode($response)

?>