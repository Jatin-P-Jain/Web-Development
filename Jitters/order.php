<?php
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="food";
$name=$_POST["prodname"];
$type=$_POST["prodtype"];
$price=$_POST["prodprice"];
$qnty=$_POST["prodqnty"];
$csid=$_POST["cid"];
$_SESSION['cid']=$csid;

// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$subt=$price*$qnty;

$sql = "SELECT * FROM orders ORDER BY item_no DESC LIMIT 1";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array ($result);
	$itemno = $row['item_no'];
	
	$itemno = $itemno + 1;

$sql = "INSERT INTO orders (cust_id,item_no,prod_type,product,quantity,unit_price,price)
VALUES ('$csid','$itemno','$type','$name', '$qnty' ,'$price',$subt)";
$_SESSION['ptype']=$type;
if ($conn->query($sql) === TRUE) {
    include "selections.php";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>