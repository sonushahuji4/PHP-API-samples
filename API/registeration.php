<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql ="INSERT INTO users (username, email, password)VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) 
{
    echo "User registered successfully";
} 
else 
{
    echo "Error while registering user: " . $sql . "<br>" . $conn->error;
}

$conn->close()

?>