<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="vendors2/css2/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors2/css2/Grid.css">
    <link rel="stylesheet" type="text/css" href="vendors2/css2/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="vendors2/css2/animate.css">
	<link href="resources2/css2/seller1111111111.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="resources2/css2/style2222.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
	<title>Vastra</title>
</head>
<body>
<header>
	<div class="topbar">
	<div class="topnav">
	  <a href="#" onclick="document.getElementById('id01').style.display='block'"><i class="ion-home iconback"></i>Home</a>
	  <a href="index2.html">Category  (Men/Women)</a>
	  <a href="menS.php" >Shirts</a>
	  <a href="#" class="current">T-Shirts</a>
	  <a href="menJ.php">Jeans</a>
	  <a href="buyerabout.html">About Us</a>
	 </div>
					
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
					
					<?php
				session_start();
				$servername ="localhost";
				$username ="root";
				$password ="";
				$dbname ="shopping";

				
				$conn =new mysqli($servername, $username, $password, $dbname);

				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}



				$sql = "SELECT prod_id,name,type,size,cost,img FROM products WHERE gender='Male' AND type='TShirt'";
			    $result = mysqli_query($conn,$sql);
	    		 while ($row = mysqli_fetch_array ($result)){
					?>
							<div class="row">
							<div class="col span-1-of-2">

								<div class="prod-box">
									<img src="<?php echo $row ['img']; ?>">
									 <div class="prod-details">
										 <?php echo $row ['name']; ?><br>
									 Code No.<?php echo $row ['prod_id']; ?><br>
									 Price:&nbsp;&nbsp;₹&nbsp;<?php echo $row ['cost']; ?><br> 
										 Size: <?php echo $row ['size']; ?><br>
										 
									 </div>
								<a href="buy.php?pid=<?php echo $row ['prod_id']; ?>" class="buybtn">Buy Now</a>
								</div>
							</div>
						<?php
					      }
				        ?>
							
						</div>

	   			

</body>
</html>
