<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A new OmniFood Website Created By a Young Indian Chap.">
        <link rel="stylesheet" type="text/css" href="vendors1/css1/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors1/css1/Grid.css">
        <link rel="stylesheet" type="text/css" href="vendors1/css1/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors1/css1/animate.css">
        <link rel="stylesheet" type="text/css" href="resources1/css1/style11111111111111.css">
        <link rel="stylesheet" type="text/css" href="resources1/css1/signup.css">
        <link rel="stylesheet" type="text/css" href="resources1/css1/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
		<title>OmniFood</title>
    </head>
    <body>
       <div class="selections">
		   <?php
				$servername ="localhost";
				$username ="root";
				$password ="";
				$dbname ="food";
		   		
				$csid=$_SESSION['cid'];
		   		
				// Create connection
				$conn =new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 

				
				?>
			

		  <div class="plans" id="plans-scroll">
            <div class="row">
                <h2 class="heading">Your Choices</h2>
            </div>
           <div class="row">
            <div class="container">
                    <div class="select-category">
						<div class="column-name row">
							<div class="col span-1-of-5">
								<p>Item_No</p>
							</div>
							<div class="col span-1-of-5">
								<p>Item</p>
							</div>
							<div class="col span-1-of-5">
								<p>Unit Price</p>
							</div>
							<div class="col span-1-of-5">
								<p>Quantity</p>
							</div>
							<div class="col span-1-of-5">
								<p>Total</p>
							</div>
						</div> 
                    
			<?php
				 $result1 = mysqli_query($conn,"CALL `display`($csid)"); 					  
				 while ($row1 = mysqli_fetch_array($result1)){
			?>
					<div class="row">
						<div class="col span-1-of-5">
							<p><?php echo $row1['item_no']; ?></p>
						</div>
						<div class="col span-1-of-5">
							<p><i class="selection-icon ion-android-restaurant"></i></p>
							<p><?php echo $row1['product']; ?></p>
						</div>
					
					
						<div class="col span-1-of-5">
							<p>₹ <?php echo $row1['unit_price']; ?></p>
						</div>
				
					
						<div class="col span-1-of-5">
							<p><?php echo $row1['quantity']; ?></p>
						</div>
					
					
						<div class="col span-1-of-5">
							<p>₹<?php echo $row1['price']; ?>/-</p>
						</div>
					
					</div>
             <?php
				}
			 ?>
              </div>   
			</div>
			   <div class="selection-nav row">
				   
				   <div class="col span-1-of-3">
				   		<span1><a class="btn btn-2" href="menu.php?cid=<?php echo $csid; ?>"> << Back to Menu </a></span1>
				   </div>
				   <div class="col span-1-of-3">
					   <form method="post" action="delete.php">
						   Item_no To Delete<br>
						<input type="hidden" name="cust" value="<?php echo $csid; ?>">
						<input type="number" name="item_no">
				   		<input type="submit" value="Delete" class="del-form btn btn-2">
						</form>
			 	   </div>
				   <div class="col span-1-of-3">
				   		<span><a class="btn btn-1" href="delivery.php?cid=<?php echo $csid; ?>">Proceed >></a></span>
				   </div>
		  	   </div>
            </div>
		</div>
		   
		   
		</div> 
	</body>
		
	
</html>