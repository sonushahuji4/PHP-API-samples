<?php

header ( 'Content-Type: application/json' );

require_once '../include/DbOperation.php';
require_once '../error_msg/ErrorMessage.php';
require_once '../error_msg/SucessMessage.php';
require_once '../validation/Validate.php';

$success= new SucessMessage();
$error = new ErrorMessage ();
$response = array ();

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['mobile']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mobile=$_POST['mobile'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];

	$valid= new Validate();
	$data= array();
	array_push ($data,$fname,$lname,$mobile,$username,$password,$email);
	$result = $valid->checkEmpty($data);
	if($result['error'])
	{
		$fname_valid=$valid->nameValidate ($fname);
		$lname_valid=$valid->nameValidate ($lname);
		$mobile_valid=$valid->mobileNumberValidate ($mobile);
		$username_valid=$valid->usernameValidate ($username);
		$password_valid=$valid->passwordValidate ($password);
		$email_valid=$valid->emailValidate ($email);
		if($fname_valid['error'] && $lname_valid['error'] && $mobile_valid['error'] && $username_valid['error'] && $password_valid['error'] && $email_valid['error'])
		{

			$db= new DbOperation();

			$new_user=$db->createUser($fname,$lname,$mobile,$username,$password,$email);
			//echo json_encode($new_user);

			if($new_user==1)
			{
				$response=$success->UserCreatedSuccess();
				//print_r('user created successfully');
			}
			else if($new_user==0)
			{
				$response=$error->RegisterationError();
				//print_r('error while registering user');
			}
			else if($new_user==2)
			{
				$response=$error->alreadyExitsUser();
				//print_r('user already exits');
			}
		}
		else
		{
			if(!$fname_valid['error'])
			{
				$response=$error->InvalidName();
			}
			if(!$lname_valid['error'])
			{
				$response=$error->InvalidName();;
			}
			if(!$mobile_valid['error'])
			{
				$response=$error->invalidMobileNumber();
				//print_r('invalid mobile number');
			}
			if(!$username_valid['error'])
			{
				$response = $error->InvalidUsername();
			}
			if(!$password_valid['error'])
			{
				$response = $error->InvalidPassword();
			}
			if(!$email_valid['error'])
			{
				$response = $error->InvalidEmail();
				//print_r('invalid mobile number');
			}
			//print_r('enter the valid data...');
		}
	}
	else
	{
		$response = $error->pleaseFillAllDataMessage ();
		//print_r('fill all the data...');
	}
}
else
{
	$response = $error->getRequiredParameterMessage ();
	//print_r('Required all parameter...');
}

echo json_encode ( $response );
?>