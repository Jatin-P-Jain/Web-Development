<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="food";
$user=$_REQUEST["uname"];  
$pass=$_REQUEST["pass"]; 

// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  
	$query=("SELECT * FROM signupcid WHERE email='".$user."' AND pass='".$pass."'");  
    $recent = mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($recent);  
    $dbusername=$row["email"];  
    $dbpassword=$row["pass"];  

  	
    if($user == $dbusername && $pass == $dbpassword)  
    {  
		session_start();
      $_SESSION['email']=$user;
     include("index1.php");
    }
	else {  
        echo "<script type='text/javascript'>alert('Invalid User Name Or PassWord!');</script>";
        include("index.html");
    }  
$conn->close();

?>