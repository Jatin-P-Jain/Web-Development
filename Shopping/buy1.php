<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="shopping";
$name=$_POST["name"];
$add=$_POST["address"];
$city=$_POST["city"];
$st=$_POST["state"];
$pin=$_POST["pin"];
$phn=$_POST["pnum"];
$toa= $_POST["toa"];
$proid=$_POST["proid"];
session_start();
// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$sql1 = "SELECT * FROM customers ORDER BY ref_id DESC LIMIT 1";
	$result1 = mysqli_query($conn,$sql1);
	$row1 = mysqli_fetch_array ($result1);
	$refid = $row1['ref_id'];
    $refid = $refid + 1;
	$_SESSION['rid']  = $refid ;	
	$_SESSION['prid']  = $proid ;
$sql = "INSERT INTO customers (ref_id,name,address,city,state,pin,phone,toa)
VALUES ('$refid','$name','$add','$city', '$st','$pin','$phn','$toa')";

if ($conn->query($sql) === TRUE) {
    include 'invoice.php';
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>