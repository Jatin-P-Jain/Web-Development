<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="food";
$name=$_POST["name"];
$add=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$pin=$_POST["pin"];
$phno=$_POST["pnum"];
$toa= $_POST["toa"];
$csid=$_POST["custid"];
session_start();
$_SESSION['cid']=$csid;
// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO deliveries (cust_id,name,address,city,state,pin,phone,toa)
VALUES ('$csid','$name','$add','$city', '$state', '$pin','$phno','$toa')";

if ($conn->query($sql) === TRUE) {
    include "invoice.php";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>