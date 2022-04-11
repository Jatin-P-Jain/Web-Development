<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="food";
$name=$_POST["name"];
$quality=$_POST["quality"];
$speed=$_POST["speed"];
$findus=$_POST["findus"];
$message=$_POST["message"];
$csid=$_POST["custid"];


// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO feedback (cust_id,name, quality, speed, source, msg)
VALUES ('$csid','$name', '$quality', '$speed', '$findus','$message')";

$sql1 = "DELETE FROM orders WHERE cust_id = '".$csid."'";
	$result1 = mysqli_query($conn,$sql1);

if (($conn->query($sql) === TRUE)) {
    include 'smiley.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>