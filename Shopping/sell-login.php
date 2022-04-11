<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="shopping";
$user=$_REQUEST["uname"];  
$pass=$_REQUEST["pass"]; 
session_start();
$_SESSION['uname'] = $user;
// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  
	$query=("SELECT * FROM seller WHERE email='".$user."' AND password='".$pass."'");  
    $recent = mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($recent);  
    $dbusername=$row["email"];  
    $dbpassword=$row["password"];  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
     
  	
    include "seller1w.php";
    }
	else {  
     echo "Invalid User Name Or PassWord!";
    }  
$conn->close();

?>