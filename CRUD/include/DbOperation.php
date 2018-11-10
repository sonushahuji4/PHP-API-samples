<?php
require_once 'Constant.php';
require_once 'DbConnect.php';


class DbOperation
{
	private $conn;

	function __construct()
	{
		$db = new DbConnect ();
		$this->conn = $db->connect ();
	}

	public function createUser($fname,$lname,$mobile,$username,$pass,$email)
	{

		if(!$this->isUserExits($mobile,$email))
		{

			$password=md5($pass);
			$stmt=$this->conn->prepare("INSERT INTO userrdetails(fname,lname,mobile,username,password,email) VALUES (?,?,?,?,?,?)");
			$stmt->bind_param("ssssss",$fname,$lname,$mobile,$username,$password,$email);
			$result=$stmt->execute();

			$stmt->close();
			//echo json_encode($result);

			if($result)
			{
				return 1;//means user created successfully
			}
			else
			{
				return 0; //error while registering user
			}
		}
		else
		{
			return 2;//user already exits
		}
	}

	private function isUserExits($mobile,$email)
	{

		$stmt=$this->conn->prepare("SELECT userid FROM userrdetails WHERE mobile=? AND email=?");
		$stmt->bind_param("ss",$mobile,$email);
		$stmt->execute();
		$stmt->store_result ();

		if ($stmt->num_rows > 0) 
		{
			// user exists
			return true;
		} 
		else 
		{
			// user does not exist
			return false;
		}
		$stmt->close ();
	}

	public function userLogin($username,$pass)
	{
		#$password=md5($pass);
		$stmt=$this->conn->prepare("SELECT id FROM users WHERE username=? AND password=?");
		$stmt->bind_param("ss",$username,$pass);
		$stmt->execute();
		$stmt->store_result ();
		#$userid = $stmt->get_result()->fetch_assoc();
		#echo $userid;
		$res=$stmt->num_rows;
		//echo json_encode($res);
		if ($res > 0) 
		{
			// login success
			return 1;
		} 
		else 
		{
			// user not registered
			return 0;
		}
		$stmt->close ();

	}
	public function getUserId($mobile,$email)
	{
        $stmt = $this->conn->prepare("SELECT userid FROM userrdetails WHERE mobile=? AND email=?");
        $stmt->bind_param("ss", $mobile,$email);
        $stmt->execute();
        $userid = $stmt->get_result()->fetch_assoc();
        return $userid;
    
	}
	public function uploadFile($language,$topic,$program,$filepath)
	{
		$stmt=$this->conn->prepare("INSERT INTO uploaddetails(language,topic,program,filepath) VALUES(?,?,?,?)");
		$stmt->bind_param("ssss",$language,$topic,$program,$filepath);
		$stmt->execute();

		$stmt->close();
			//echo json_encode($result);

			if($result)
			{
				echo 'file uploaded successfully';
				return 1;//file uploaded successfully
			}
			else
			{
				echo 'error while uploading file';
				return 0; //error while uploading file
			}
	}
}

?>