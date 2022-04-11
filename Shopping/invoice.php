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
			<p>Invoice</p>
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
									$rid =$_SESSION['rid'];								
									$prdct =$_SESSION['prid'];
							
									$sql1 = "SELECT * FROM customers where ref_id=".$rid."";
									$result1 = mysqli_query($conn,$sql1);
									$row1 = mysqli_fetch_array ($result1);
									
									$sql2 = "SELECT * FROM products where prod_id=".$prdct."";
									$result2 = mysqli_query($conn,$sql2);
									$row2 = mysqli_fetch_array ($result2);		
									$price=$row2['cost'];
							
									$amnt=($price+($price*0.18));
							
									$sql = "INSERT INTO invoices (ref_id,prod_id,price,amount)
                                            VALUES ('$refid','$prdct','$price','$amnt')";
									$result = mysqli_query($conn,$sql);
                                    $_SESSION['prid']=$prdct;
							?>
							<h2>Shipping Address : </h2>
								<div class="container-form">
								<div class="prod-details row">
									<h3><em><b><?php echo $row1 ['name'];?></b><br><?php echo $row1 ['address'];?>,<br>  <?php echo $row1 ['city'];?>,  <?php echo $row1 ['state'];?><br><?php echo $row1 ['pin'];?></em></h3>
									<h3><div class="col span-1-of-2">Reference No.</div>
										<div class="col span-1-of-2"><em><?php echo $rid; ?></em></div></h3>
									<h3><div class="col span-1-of-2">Product ID:</div>
										<div class="col span-1-of-2"><em><?php echo $prdct; ?></em></div></h3>
									<h3><div class="col span-1-of-2">Name Of Product:</div>
										<div class="col span-1-of-2"><em><?php echo $row2['name']; ?></em></div></h3>
									<h3><div class="col span-1-of-2">Sub Total:</div>
										<div class="col span-1-of-2"><em>₹  <?php echo $row2['cost']; ?></em><br>+18%(GST)</div></h3>
									<h3 class="amount"><div class="col span-1-of-2" >Amount to Be Paid:</div>
										<div class="col span-1-of-2">₹  <em><?php echo $amnt; ?></em></div></h3> 
								</div>	
								<h3 class="paymentnote">*NOTE: You can pay the AMOUNT when product is DELIVERED at your door-step.</h3>
								<h3 class="deliverydate">Delivery in 5-6 working days.</h3>
									<div class="row">
									<div class="col span-1-of-2">
								<a href="index2.html" class="shopbtn"> << Go Back</a>
									</div>
									<div class="col span-1-of-2">
								<a href="placed.php?prid=<?php echo $prdct?>" class="okbtn">Confirm >> </a>
									</div>
										</div>
							</div>
							
						  </div>
	
	
                
</body>
</html>


