<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="shopping";
$prodid=$_POST["prodid"];
$name=$_POST["pname"];
$type=$_POST["ptype"];
$size=$_POST["psize"];
$cost=$_POST["pcost"];
$count=$_POST["pcount"];
$gender=$_POST["gender"];
session_start();
// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$sql1 = "UPDATE products set name= '".$name."',type= '".$type."',size= '".$size."',cost= '".$cost."',count= '".$count."',gender= '".$gender."' WHERE prod_id = '".$prodid."'";
	$result1 = mysqli_query($conn,$sql1);



if ($conn->query($sql1) === TRUE) {
    include "seller1w.php";
	
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();

?>