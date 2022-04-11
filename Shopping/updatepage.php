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
		  <a href="updatepage.php" class="current">Update</a>
		  <a href="deletepage.php" >Delete</a>
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
							  <h2>Existing Product Details</h2>
								<div class="container-form">
								<div class="row">
										<div class="list-att col span-1-of-7">
											  <h3><em>Product ID</em></h3>
										</div>
										<div class="list-att col span-1-of-7">
											  <h3><em>Name</em></h3>
										</div>
										<div class="list-att col span-1-of-7">
											  <h3><em>Type</em></h3>
										</div>
									    <div class="list-att col span-1-of-7">
											  <h3><em>Size</em></h3>
										</div>
										<div class="list-att col span-1-of-7">
											  <h3><em>Cost</em></h3>
										</div>
									    <div class="list-att col span-1-of-7">
											  <h3><em>Count</em></h3>
										</div>
									    <div class="list-att col span-1-of-7">
											  <h3><em>Gender</em></h3>
										</div>
									</div>	
						<?php
                            $query="select * from products where sell_id=".$sellid;
						 $result = mysqli_query($conn,$query); 
						  
						 while ($row = mysqli_fetch_array($result)){

						?>
			   				       <div class="row">
										<div class="list-att col span-1-of-7">
											  <?php echo $row ['prod_id']; ?>
										</div>
										<div class="list-att col span-1-of-7">
											  <?php echo $row ['name']; ?>
										</div>
										<div class="list-att col span-1-of-7">
											  <?php echo $row ['type']; ?>
										</div>
									   <div class="list-att col span-1-of-7">
											  <?php echo $row ['size']; ?>
										</div>
									   <div class="list-att col span-1-of-7">
											  <?php echo $row ['cost']; ?>
										</div>
									   <div class="list-att col span-1-of-7">
											  <?php echo $row ['count']; ?>
										</div>
									   <div class="list-att col span-1-of-7">
											  <?php echo $row ['gender']; ?>
										</div>
										
									</div>
						    <?php
							   }
							?>
						
					   <form  method="post"  action="update.php">						
						  <div class="del-input row">
							<div class="label col span-1-of-3">
								  Enter Product ID to Update&nbsp;:
							</div>
							<div class="col span-2-of-3">
								  <input type="number" name="prodid" placeholder="Enter here!" required>
							</div>
						</div>
						   <div class="row">
							<div class="label col span-1-of-3">
								  New Name
							</div>
							<div class="col span-2-of-3">
								  <input type="text" name="pname" id="name" placeholder="Enter Your Product Name" required>
							</div>
						</div>    
					  
						<div class="row">
							<div class="label col span-1-of-3">
								  New Type
							</div>
							<div class="col span-2-of-3">
								  <input type="text" name="ptype" id="ptype" placeholder="Enter Your Product Type" required>
							</div>
						</div>    
					  <div class="row">
							<div class="label col span-1-of-3">
								  New Size
							</div>
						  
							<div class="col span-2-of-3">
								<div class="col span-1-of-3">
								  <input type="radio" name="psize" id="psize" value="Small" required>S
									</div>
								<div class="col span-1-of-3">
								  <input type="radio" name="psize" id="psize" value="Medium" required>M
									</div>
								  <input type="radio" name="psize" id="psize" value="Large" required>L
							</div>  
						  </div>

					 <div class="row">
							
							<div class="label col span-1-of-3">
								  New Cost
							</div>
							<div class="col span-2-of-3">
								  <input type="text" name="pcost" id="pcost" placeholder="Enter the Product Cost" required>
							</div>
							
						</div>
						<div class="row">
						<div class="label col span-1-of-3">
								  New Count
							</div>
							<div class="col span-2-of-3">
								  <input type="text" name="pcount" id="pcount" placeholder="Enter the Product Count" required>
							</div>    
                        </div>
					  <div class="row">
							<div class="label col span-1-of-3">
								  New Gender
							</div>
							<div class="col span-2-of-3">
								<div class="col span-1-of-3">
								  <input type="radio" name="gender" value="Male" required>Male(M)
								</div>
								<div class="col span-1-of-3">
								  <input type="radio" name="gender" value="Female" required>Female(F)
								</div>
							</div>
						</div>
						<input class="updatebtn" type="submit" value="Update" onclick="alert('product updated successfully!')">
					  
					   </form>
							
									
								</div>
							
							
							
							
							</div>
						</div>
				</div>
            </header>
		</body>
</html>