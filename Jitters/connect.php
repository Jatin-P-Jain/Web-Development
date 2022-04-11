<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="food";
$name=$_POST["name"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$pnum=$_POST["pnum"];
$toa=$_POST["toa"];


$order1=$_POST["order1"];
$order2=$_POST["order2"];
$order3=$_POST["order3"];
$order4=$_POST["order4"];
$order5=$_POST["order5"];
$order6=$_POST["order6"];
$order7=$_POST["order7"];
$order8=$_POST["order8"];
$order9=$_POST["order9"];
$order10=$_POST["order10"];
$order11=$_POST["order11"];
$order12=$_POST["order12"];



// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO form (name, address, city, state, phone,toa)
VALUES ('$name', '$address', '$city', '$state','$pnum','$toa')";

$sql1 = "INSERT INTO orderfood (name,Bread, Rolls, Nachos, Sizzler,Tikka,Pulao,Brownie,Chocolate,Cake,Drinks,Shake,Smoothie)
VALUES ('$name','$order1', '$order2', '$order3', '$order4','$order5','$order6','$order7','$order8','$order9','$order10','$order11','$order12')";



if (($conn->query($sql) === TRUE) && ($conn->query($sql1) === TRUE)) {
    include 'orderplaced.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>