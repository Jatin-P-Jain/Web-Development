<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="shopping";
$name=$_POST["name"];
$email=$_POST["uname"];
$pass=$_POST["pass"];
$rpass=$_POST["rpass"];
$phn=$_POST["pnum"];
$gen=$_POST["gender"];
session_start();
// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
if ($pass === $rpass) {

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	$sql1 = "SELECT * FROM user ORDER BY cust_id DESC LIMIT 1";
	$result1 = mysqli_query($conn,$sql1);
	$row1 = mysqli_fetch_array ($result1);
	$custid = $row1['cust_id'];
    $custid = $custid + 1;
	
	$sql = "INSERT INTO user (cust_id,name,email,password,phone,gender)
	VALUES ('$custid','$name','$email','$pass','$phn','$gen')";

if ($conn->query($sql) === TRUE) {
    include 'index2.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

else {
	include 'index.html';
}

$conn->close();

?>