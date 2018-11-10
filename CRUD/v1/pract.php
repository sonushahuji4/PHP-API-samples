<?php

if(isset(($_POST['submit'])))
{
	$file = $_FILES['file'];//

	$filename = $_FILES['file']['name']; // to get file name
	$filetemplocation = $_FILES['file']['tmp_name'];// to get file temp location
	$filesize =$_FILES['file']['size'];//to get file size
	$fileerror = $_FILES['file']['error'];// if error in uploading file then need to stop uploading the file
	$filetype = $_FILES['file']['type'];// type of file image of file etc

	// allowing which files to be allowd to upload

	$fileext = explode('.', $filename); // takes the file name ex. for.c here filename=for
	$fileactualext = strtolower(end($fileext));// this takes the .extension file in which to save the file

	$allowd = array('c','cpp','java','php','py','pdf','txt');// allowing the file extension

	if(in_array($fileactualext,$allowd))// checking the extension and if it is as per mentioned above then
	{
		if($fileerror===0)// if there is no error in the file then upload the file
		{
			if($filesize<1000000)
			{
				$filenamenew = uniqid('',true).".".$fileactualext;// setting up uniqu file name so that it does not override the other files
				$filedestination = 'uploads/'.$filenamenew;// where u want to upload the file
				move_uploaded_file($filetemplocation, $filedestination);
				//header("Location: index.php");
			}
			else
			{
				echo 'file is to large to upload';
			}
		}
		else
		{
			echo 'error in uploading the file';
		}
	}
	else
	{
		echo 'you cannot upload file of this type';
	}

}
?>