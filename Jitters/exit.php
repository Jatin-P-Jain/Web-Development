<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="food";



$csid=$_GET['cid'];
// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$sql1 = "DELETE FROM orders WHERE cust_id =$csid" ;
	$result1 = mysqli_query($conn,$sql1);



if ($conn->query($sql1) === TRUE) {
    include "smiley.html";
	
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();

?>