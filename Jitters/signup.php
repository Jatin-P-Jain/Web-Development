<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="food";
$name=$_POST["name"];
$email=$_POST["uname"];
$pass=$_POST["pass"];
$rpass=$_POST["rpass"];
$phone=$_POST["phn"];
// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
if ($pass === $rpass) {

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();
$_SESSION['email']=$email;
$sql = "INSERT INTO signup (name,email, pass, rpass,phone)
VALUES ('$name','$email', '$pass', '$rpass','$phone')";


if ($conn->query($sql) === TRUE) {
    include 'index1.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

else {
	echo "Password Do Not Match!";
}

$conn->close();

?>