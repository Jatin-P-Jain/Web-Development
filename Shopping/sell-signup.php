<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="shopping";
$name=$_POST["name"];
$email=$_POST["uname"];
$pass=$_POST["pass"];
$cpass=$_POST["cpass"];
$phone=$_POST["pnum"];
$city=$_POST["city"];

$_SESSION['uname'] = $email;
// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
if ($pass === $cpass) {

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$sql1 = "SELECT * FROM seller";
	$result1 = mysqli_query($conn,$sql1);
	$row1 = mysqli_fetch_array ($result1);
	//$sellid = $row1['sell_id'];
	
	//$sellid = $sellid + 1;
	
	
	$_SESSION['sid'] = $sellid;
	$sql = "INSERT INTO seller (name, email, password,cpass, mobile,city)
	VALUES ('$name','$email', '$pass', '$cpass','$phone','$city')";

	if ($conn->query($sql) === TRUE) {
		include "seller1w.php";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	}

	else {
		echo "Passwords Do Not Match!";
	}

$conn->close();

?>