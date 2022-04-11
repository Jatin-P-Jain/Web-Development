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
			<p>Delivery Details</p>
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
					  <form  method="post" class="modal-content" action="buy1.php">
						<div class="container">
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
								 $prodid = $_GET ['pid']; 
								 $sql = "SELECT prod_id,name,size,cost FROM products WHERE prod_id='".$prodid."'";
								 $result = mysqli_query($conn,$sql);
								 $row = mysqli_fetch_array ($result);
								
							?>
							<h2>Product you selected</h2>
								<div class="container-form">
								<div class="prod-details row">
										<h3><div class="col span-1-of-2">Code No.</div>
											<div class="col span-1-of-2"><em><?php echo $row ['prod_id']; ?></em></div></h3>
										<h3><div class="col span-1-of-2">Name</div>
											<div class="col span-1-of-2"><em><?php echo $row ['name']; ?></em></div></h3>
										<h3><div class="col span-1-of-2">Size</div>
											<div class="col span-1-of-2"><em><?php echo $row ['size']; ?></em></div></h3>
										<h3><div class="col span-1-of-2">Price<br>(excl. of taxes)</div>
											<div class="col span-1-of-2"><em>₹&nbsp;&nbsp;<?php echo $row ['cost']; ?>&nbsp;/-</em></div></h3>
								</div>	
						
							</div>
							
							<div class="container-form">
								<p><marquee width="500" height="50" behavior="alternate">Please Fill The Delivery Details </marquee></p>
								
						   <div class="row">
                        <div class="col span-1-of-3">
                            <label>Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                              <label>Your Address</label>&nbsp;
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="address" id="address" placeholder="House No.,  Street No.,  Locality" required>
                        </div>
					 </div>  
					<div class="row">
						<div class="col span-1-of-3">
                              <label>City</label>&nbsp;
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="city" id="city" placeholder="City" required>
                        </div>
					</div>
					<div class="row">
						<div class="col span-1-of-3">
                              <label>State</label>&nbsp;
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="state" id="state" placeholder="State" required>
                        </div>
					</div>
					<div class="row form-phone">
                        <div class="col span-1-of-3">
                              <label>PIN Code</label>
                            &nbsp;
                        </div>
                        <div class="col span-2-of-3 ">
                            <input type="number" name="pin" required>
                        </div>
                    </div>
                    <div class="row form-phone">
                        <div class="col span-1-of-3">
                              <label>Phone No.</label>
                            &nbsp;
                        </div>
                        <div class="col span-2-of-3 ">
                            <input type="number" name="pnum" placeholder="eg. 94XXXXXX90" required>
                        </div>
                    </div> 
								
                    <div class="row">
                        <div class="col span-1-of-3">
                              <label>Type OF Address</label>
                            &nbsp;
                        </div>
                        <div class="col span-2-of-3">
							<div class="col span-1-of-2">
                            <input type="radio" name="toa" value="Home" checked>Home</div>
                            <input type="radio" name="toa" value="Office">Office
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col span-1-of-3">
							<label>&nbsp;</label>
                            
                        </div>
                        <div class="col span-2-of-3">
							<input type="hidden" name="proid" value="<?php echo $row ['prod_id']; ?>">
                            <input type="submit" value="Proceed To Checkout >>" class="submit">
                        </div>
                    </div>
									
							</div>
						  
				</div>
	</form>
	
	
                
</body>
</html>


