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
			<a href="index2.html">Category  (Men/Women)</a>
	  <a href="buyerabout.html">About Us</a>
	 </div>
			<p>Order Placed</p>
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
					  
						<div class="container">
						<?php
								
								$servername ="localhost";
								$username ="root";
								$password ="";
								$dbname ="shopping";
							    
								// Create connection
								$conn =new mysqli($servername, $username, $password, $dbname);
								if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
								}
																
									$prdct =$_GET['prid'];
									$sql2 = "SELECT * FROM products where prod_id=".$prdct."";
									$result2 = mysqli_query($conn,$sql2);
									$row2 = mysqli_fetch_array ($result2);	
									$sql2 = "UPDATE products SET count=".$row2['count']."-1 WHERE prod_id=".$prdct."";
									$result2 = mysqli_query($conn,$sql2);
									

							?>
							<h2>Thank You.</h2>
								<div class="container-form">
								<div class="prod-details row">
                                    <h3 style="color:green; font-size:180%;"><em><b>Your Order has been placed successfully!</b></em></h3>
									
                                       <div class="row" style="margin-top:10%;">
									
								<a href="index2.html" class="okbtn">Shop More</a>
									</div>
										</div>
						
							
                                    </div></div></div>
	
	
                
</body>
</html>


