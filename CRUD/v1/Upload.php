<?php

header ( 'Content-Type: application/json' );

require_once '../include/DbOperation.php';
require_once '../error_msg/ErrorMessage.php';
require_once '../error_msg/SucessMessage.php';
require_once '../validation/Validate.php';

$success= new SucessMessage();
$error = new ErrorMessage ();
$response = array ();
$db=new DbOperation();

$userid=$db->getUserId($userid);

if(isset($_POST['topic']))
{
	$topic=$_POST['topic'];
	//$program=$_POST['program'];

	$valid= new Validate();
	$data= array();
	array_push ($data,$topic);

	$result = $valid->checkEmpty($data);

	if($result['error'])
	{
		$topic_valid = $valid->nameValidate ( $topic );

		if($topic_valid['error'])
		{

				
				   
				$uploadOk = 1;

				$target_file =  basename($_FILES["fileToUpload"]["name"]);
				$program=basename($_FILES["fileToUpload"]["name"]);


				$file_extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				$language=$file_extensionl;

				switch ($file_extension) 
				{
					case 'c':
							$target_dir = "upload/c/";
							break;

					case 'cpp':
							$target_dir = "upload/cpp/";
							break;

					case 'java':
							$target_dir = "upload/java/";

					case 'php':
							$target_dir = "upload/php/";
						break;

					case 'py':
							$target_dir = "upload/python/";
							break;

					default:
						$target_dir = "upload/other";
						break;
				}
				//echo $target_dir;
				//$filepath=$target_dir;

				$target_file =  $target_dir.basename($_FILES["fileToUpload"]["name"]);
				$filepath=$target_file;


				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) 
				{
				    echo "Sorry, your file was not uploaded.";
				} 
				else 
				{
					$db= new DbOperation();
					$uploadresult=$db->uploadFile($language,$topic,$program,$filepath);

					    if($uploadresult==1)
					    {
					    	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
						    {
						        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
						    } 
						    else 
						    {
						        echo "Sorry, there was an error uploading your file.";
						    }
					    }
					    else if($uploadresult==0)
					    {
					    	echo 'error while uploading file';
					    }
				}

		}
		else 
		{
			echo 'invalid';
		}
	}
	else
	{
		$response = $error->pleaseFillAllDataMessage ();
	}
}
else
{
	$response = $error->getRequiredParameterMessage ();
}

?>