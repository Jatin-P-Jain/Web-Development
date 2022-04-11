<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="shopping";
$name=$_POST["pname"];
$type=$_POST["ptype"];
$size=$_POST["psize"];
$cost=$_POST["pcost"];
$count=$_POST["pcount"];
$gender=$_POST["gender"];
$file= $_POST["image"];
$path="./resources2/img2/uploads/";
$img=$path.$file;
session_start();
// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$sql1 = "SELECT * FROM products ORDER BY prod_id DESC LIMIT 1";
	$result1 = mysqli_query($conn,$sql1);
	$row1 = mysqli_fetch_array ($result1);
	$prodid = $row1['prod_id'];
	
	$prodid = $prodid + 1;
    $sellid = $_SESSION['sid']  ;

$sql = "INSERT INTO products (sell_id,prod_id,name, type, size,cost, count,gender,img)
VALUES ('$sellid','$prodid','$name','$type', '$size', '$cost','$count','$gender','$img')";

if ($conn->query($sql) === TRUE) {
    include "seller1w.php";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>