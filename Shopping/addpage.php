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
		  <a href="#" class="current">Add</a>
		  <a href="updatepage.php">Update</a>
		  <a href="deletepage.php">Delete</a>
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
					  <form  method="post" class="modal-content" action="add.php">
						<div class="container">
						  <h2>Add the product details</h2>
							<div class="container-form">
						  <div class="row">
							<div class="col span-1-of-3">
								  <label>Name of the product</label>
							</div>
							<div class="col span-2-of-3">
								  <input type="text" name="pname" id="name" placeholder="Enter Your Product Name" required>
							</div>
						</div>    
					  
						<div class="row">
							<div class="col span-1-of-3">
								  <label>Product Type</label>
							</div>
							<div class="col span-2-of-3">
								  <input type="text" name="ptype" id="ptype" placeholder="Enter Your Product Type" required>
							</div>
						</div>    
					  <div class="row">
							<div class="col span-1-of-3">
								  <label>Product Size</label>
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
							
							<div class="col span-1-of-3">
								  <label>Product Cost</label>
							</div>
							<div class="col span-2-of-3">
								  <input type="text" name="pcost" id="pcost" placeholder="Enter the Product Cost" required>
							</div>
							
						</div>
						<div class="row">
						<div class="col span-1-of-3">
								  <label>Product Count</label>
							</div>
							<div class="col span-2-of-3">
								  <input type="text" name="pcount" id="pcount" placeholder="Enter the Product Count" required>
							</div>    
                        </div>
					  <div class="row">
							<div class="col span-1-of-3">
								  <label>For Whom?</label>
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
						<div class="row">
							<div class="col span-1-of-3">
								  <label>Image of the Product</label>
							</div>
							<div class="row span-2-of-3">
								  <input type="file" name="image" id="img" placeholder="Image" required>
							</div>
						</div>   
							
					  <div class="row">
						<button onclick="document.getElementById('id01').style.display='none'" class="cancelbtn cnclbtn">Cancel</button>
						<button type="submit" class="signup" onclick="alert('product added successfully!')">ADD</button>
					  </div>
					</div>
							</div>
					  </form>
				</div>
				</header>
		</body>
</html>