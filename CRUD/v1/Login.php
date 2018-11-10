<?php


header ( 'Content-Type: application/json' );

require_once '../include/DbOperation.php';
require_once '../error_msg/ErrorMessage.php';
require_once '../error_msg/SucessMessage.php';
require_once '../validation/Validate.php';

$error = new ErrorMessage ();
$success= new SucessMessage();
$response = array ();
if(isset($_POST['username']) && isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	$valid= new Validate();
	$data=array();

	array_push($data,$username,$password);
	$result=$valid->checkEmpty ($data);
	if($result['error'])
	{
		$username_valid=$valid->usernameValidate($username);
		$password_valid=$valid->passwordValidate($password);
		if($username_valid['error'] && $password_valid['error'])
		{
			$db= new DbOperation();
			$login=$db->userLogin($username,$password);
			if($login==1)
			{
				$response = $success->LoginSuccess();	
				//print_r('login success...');
			}
			else if($login==0)
			{
				$response = $error->LoginFail();	
				//print_r('login fail...');
			}
		}
		else
		{
			if(!$username_valid['error'])
			{
				$response = $error->InvalidUsername();
			}

			if(!$password_valid['error'])
			{
				$response = $error->InvalidPassword();		
			}
			//print_r('enter the valid data...');
		}
	}
	else
	{
		//print_r('fill all the data...');
		$response = $error->pleaseFillAllDataMessage ();
	}
}
else
{
	//print_r('Required all parameter...');
	$response = $error->getRequiredParameterMessage ();
}
echo json_encode($response);
?>