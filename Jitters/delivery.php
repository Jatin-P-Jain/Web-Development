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
		   		session_start();
				$csid=$_GET['cid'];
		   		
				// Create connection
				$conn =new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 

				
				?>
			

		  <div class="plans" id="plans-scroll">
            <div class="row">
                <h2 class="heading">Your Place</h2>
            </div>
           <div class="row">
            <div class="container">
                    <div class="select-category">
						<div class="column-name row">
							<p><marquee width="500" height="50" behavior="scroll">Delivery To..&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delivery To..Delivery To..&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delivery To.. </marquee></p>
						</div> 
						<div class="delivery-form">
						<form method="post" action="cust-details.php">
                    <div class="row">
                        <div class="label col span-1-of-3">
                            Name
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="label col span-1-of-3">
                              <label>Your Address</label>&nbsp;
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="address" id="address" placeholder="House No.,  Street No.,  Locality" required>
                        </div>
					 </div>  
					<div class="row">
						<div class="label col span-1-of-3">
                              <label>City</label>&nbsp;
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="city" id="city" placeholder="City" required>
                        </div>
					</div>
					<div class="row">
						<div class="label col span-1-of-3">
                              <label>State</label>&nbsp;
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="state" id="state" placeholder="State" required>
                        </div>
					</div>
					<div class="row form-phone">
                        <div class="label col span-1-of-3">
                              <label>PIN Code</label>
                            &nbsp;
                        </div>
                        <div class="col span-2-of-3 ">
                            <input type="number" name="pin" required>
                        </div>
                    </div>
                    <div class="row form-phone">
                        <div class="label col span-1-of-3">
                              <label>Phone No.</label>
                            &nbsp;
                        </div>
                        <div class="col span-2-of-3 ">
                            <input type="number" name="pnum" placeholder="eg. 94XXXXXX90" required>
                        </div>
                    </div> 
								
                    <div class="row">
                        <div class="label col span-1-of-3">
                              <label>Type OF Address</label>
                            &nbsp;
                        </div>
                        <div class="col span-2-of-3">
							<div class="col span-1-of-2">
                            <input type="radio" name="toa" value="Home" checked>Home
							</div>
							<div class="col span-1-of-2">
                            <input type="radio" name="toa" value="Office">Office
							</div>
                        </div>
                    </div> 
					<div class="row">
                        <div class="col span-1-of-3">
							<label>&nbsp;</label>
                            
                        </div>
                        <div class="col span-2-of-3">
							<input type="hidden" name="custid" value="<?php echo $csid; ?>">
                            <input type="submit" value="Proceed To Checkout >>">
                        </div>
                    </div>
					</form>
				</div>
					
              </div>
				
			</div>
			  
            </div>
		</div>
		   
		   
		</div> 
	</body>
		
	
</html>








								
						   
                    