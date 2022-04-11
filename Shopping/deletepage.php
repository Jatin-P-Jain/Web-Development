<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors2/css2/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors2/css2/Grid.css">
        <link rel="stylesheet" type="text/css" href="vendors2/css2/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors2/css2/animate.css">
        <link rel="stylesheet" type="text/css" href="resources2/css2/add111111.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
		<title>Vastra</title>
    </head>
	<body>
		<header>
			<div class="topbar">
		<div class="topnav">
		  <a href="#" onclick="document.getElementById('id01').style.display='block'"><i class="ion-home iconback"></i>Home</a>
		  <a href="addpage.php" >Add</a>
		  <a href="updatepage.php">Update</a>
		  <a href="deletepage.php" class="current">Delete</a>
		  <a href="aboutw.php">About Us</a>
		</div>
				<?php
				session_start();
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
				$_SESSION['sid'] = $sellid ;
				?>
		<span>Seller ID:<?php echo $sellid ?></span>
				<span>Welcome!</span>
		</div>
			<div id="id01" class="modal1">
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
			
			<div class="modal">
					  <div class="modal-content">
						<div class="container">
							  <h2>Choose the product  you want to delete</h2>
								<div class="container-form">
								<div class="row">
										<div class="list-att col span-1-of-3">
											  <h3><em>Product ID</em></h3>
										</div>
										<div class="list-att col span-1-of-3">
											  <h3><em>Name Of Product</em></h3>
										</div>
										<div class="list-att col span-1-of-3">
											  <h3><em>Type Of Product</em></h3>
										</div>
										
									</div>	
						<?php

						  $sql = "SELECT prod_id,name,type FROM products WHERE sell_id='".$sellid."'";
						  $result = mysqli_query($conn,$sql);
						 while ($row = mysqli_fetch_array ($result)){

						?>
			   				       <div class="row">
										<div class="list-att col span-1-of-3">
											  <?php echo $row ['prod_id']; ?>
										</div>
										<div class="list-att col span-1-of-3">
											  <?php echo $row ['name']; ?>
										</div>
										<div class="list-att col span-1-of-3">
											  <?php echo $row ['type']; ?>
										</div>
										
									</div>
						    <?php
							   }
							?>
						
					   <form  method="post"  action="delete.php">						
						  <div class="del-input row">
							<div class="label col span-1-of-3">
								  Enter Product ID&nbsp;:
							</div>
							<div class="col span-2-of-3">
								  <input type="number" name="prodid" placeholder="Enter here!" required>
							</div>
						</div>    
						<input class="deletebtn" type="submit"  value="Delete" onclick="alert('product deleted successfully!')">
					  
					   </form>
							
									
								</div>
							
							
							
							
							</div>
						</div>
				</div>
            </header>
		</body>
</html>