<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="vendors2/css2/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors2/css2/Grid.css">
    <link rel="stylesheet" type="text/css" href="vendors2/css2/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="vendors2/css2/animate.css">
	<link href="resources2/css2/seller1111111111.css" type="text/css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
	<title>Vastra</title>
</head>
<body>
<header>
	<div class="topbar">
	<div class="topnav">
	  <a href="#" onclick="document.getElementById('id01').style.display='block'"><i class="ion-home iconback"></i>Home</a>
	  <a href="addpage.php">Add</a>
	  <a href="updatepage.php">Update</a>
	  <a href="deletepage.php">Delete</a>
	  <a href="aboutw.php">About Us</a>
	 </div>
					<?php
                    
					$servername ="localhost";
					$username ="root";
					$password ="";
					$dbname ="shopping";
           
					$user =$_SESSION['uname'];
					$conn =new mysqli($servername, $username, $password, $dbname);

					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}



					$sql1 = "SELECT * FROM sellernew where email='".$user."'";
					$result1 = mysqli_query($conn,$sql1);
					$row1 = mysqli_fetch_array ($result1);
					$sellid = $row1['sell_id'];
					$sellname = $row1['name'];
					$_SESSION['sid'] = $sellid ;
					?>
		<span>Seller ID:<?php echo $sellid ?></span>
	 	<span>Welcome!</span>
		</div>
</header>
			<div id="id01" class="modal">
					  <div class="modal-content">
						<div class="container">
						  
						  <p>You Will Be Logging Out this session!</p>
							
							<div class="row">
							<a href="#" onclick="document.getElementById('id01').style.display='none'" class="no">Cancel</a>
							<a href="index.html" class="yes">OK</a>
						  </div>
						  </div>
				</div>
            </div>
				<div class="hero-text">
					<h1>Hello <?php echo $sellname ?>!</h1>
					<h2>Vastra Gives You a Platform To Sell Your Products.</h2>
				</div>
</body>
</html>
