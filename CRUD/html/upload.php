<?php


if(isset($_POST["submit"])) 
{
   
      $uploadOk = 1;
   
}
$target_file =  basename($_FILES["fileToUpload"]["name"]);
//echo  basename($_FILES["fileToUpload"]["name"]);


$file_extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//echo $file_extension;

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
}

//echo $target_dir;
$target_file =  $target_dir.basename($_FILES["fileToUpload"]["name"]);
echo $target_file;


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
    echo "Sorry, your file was not uploaded.";
} 
else 
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
    {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } 
    else 
    {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>