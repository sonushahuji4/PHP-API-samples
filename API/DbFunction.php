<?php
error_reporting ( 1 );
require_once 'Db_Connect.php';
class DbFunction {
	private $conn;
	
	// constructor
	function __construct() {
		$db = new Db_Connect ();
		$this->conn = $db->connect ();
		if ($this->conn->connect_errno) {
			
			error_log ( "Connect failed: " . $this->conn->connect_error );
			echo json_encode ( $this->conn->connect_error );
			exit ();
		}
	}
	public function addClassRoom($class_name,$capacity)
	{
		$stmt = $this->conn->prepare ( "INSERT INTO classroom (class_name,class_capacity) VALUES (?,?)" );
		$stmt->bind_param ( "ss", $class_name, $capacity);
		$stmt->execute ();
		$new_user_id = $stmt->insert_id;
		$stmt->close ();
		//echo $new_user_id;
		return $new_user_id;
	}
	public function addTeacher($name,$department,$pos)
	{
		$stmt = $this->conn->prepare ( "INSERT INTO supevisor (name,dept,pos) VALUES (?,?,?)" );
		$stmt->bind_param ( "sss", $name, $department,$pos);
		$stmt->execute ();
		$new_user_id = $stmt->insert_id;
		$stmt->close ();
		//echo $new_user_id;
		return $new_user_id;
	}
	public function addExamTime($exam_date,$subject,$time_start,$time_ends)
	{
		$stmt = $this->conn->prepare ( "INSERT INTO examdate (exam_date,subject,time_start,time_ends) VALUES (?,?,?,?)" );
		$stmt->bind_param ( "ssss", $exam_date,$subject,$time_start,$time_ends);
		$stmt->execute ();
		echo mysqli_error($this->conn);
		$new_user_id = $stmt->insert_id;
		$stmt->close ();
		//echo $new_user_id;
		return $new_user_id;
	}
	public function getUnassignedListOfTeacher()
	{
		$stmt = $this->conn->prepare ( "SELECT id,name FROM supevisor WHERE assign_status='0'" );
		$stmt->execute ();
		$result = $stmt->get_result ();
		$teachers = array ();
		while ( $teacher = $result->fetch_assoc () ) {
			array_push ( $teachers, $teacher );
		}
		$stmt->close ();
		return $teachers;
	}
	public function getUnassignedListOfClassRooms()
	{
		$stmt = $this->conn->prepare ( "SELECT class_id, class_name FROM classroom WHERE book_status='0'" );
		$stmt->execute ();
		$result = $stmt->get_result ();
		$class_rooms = array ();
		while ( $class_room = $result->fetch_assoc () ) {
			array_push ( $class_rooms, $class_room );
		}
		$stmt->close ();
		return $class_rooms;
	}
	public function assginTeacherTOClassROom($date_id,$class_id,$teacher_id)
	{
		$stmt = $this->conn->prepare ( "UPDATE examdate SET class_id=?,teacher_id=? WHERE date_id=?" );
		$stmt->bind_param ( "sss", $class_id, $teacher_id, $date_id );
		$stmt->execute ();
		$result = mysqli_affected_rows ( $this->conn );
		$result = $stmt->close ();
		return $result;
	}
	public function updateTeacherStatus($teacher_id,$status)
	{
		$stmt = $this->conn->prepare ( "UPDATE supevisor SET assign_status=? WHERE id=?" );
		$stmt->bind_param ( "ss", $status, $teacher_id );
		$stmt->execute ();
		$result = mysqli_affected_rows ( $this->conn );
		$result = $stmt->close ();
		return $result;
	}
	public function updateClassStatus($class_id,$status)
	{
		$stmt = $this->conn->prepare ( "UPDATE classroom SET book_status=? WHERE class_id=?" );
		$stmt->bind_param ( "ss", $status,$class_id );
		$stmt->execute ();
		$result = mysqli_affected_rows ( $this->conn );
		$result = $stmt->close ();
		return $result;
	}
	public function reSetcounter()
	{
		$stmt = $this->conn->prepare ( "UPDATE classroom SET book_status='0'" );
		$stmt->bind_param ( "s", $class_id );
		$stmt->execute ();
		$result = mysqli_affected_rows ( $this->conn );
		$result = $stmt->close ();

		$stmt = $this->conn->prepare ( "UPDATE supevisor SET assign_status='0'" );
		$stmt->bind_param ( "s",  $teacher_id );
		$stmt->execute ();
		$result = mysqli_affected_rows ( $this->conn );
		$result = $stmt->close ();
		return $result;
	}

}

?>