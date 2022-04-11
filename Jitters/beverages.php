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
        <link rel="stylesheet" type="text/css" href="resources1/css1/signup1.css">
        <link rel="stylesheet" type="text/css" href="resources1/css1/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
		<title>OmniFood</title>
    </head>
    <body>
       <header>
		   <?php
			session_start();		
			$csid=$_GET['cid'];
			
			?>

		  <div class="plans" id="plans-scroll">
            <div class="row">
                <h2 class="heading">Choice is Yours!</h2>
            </div>
           <div class="row">
                
		
            <div class="container">
                    <div class="category">
						<div class="cat-name">
                            <h3>Desserts</h3>                          
                        </div>
						<div class="column-name row">
							<div class="col span-1-of-4">
								<p>Item</p>
							</div>
							<div class="col span-1-of-4">
								<p>Unit Price</p>
							</div>
							<div class="col span-1-of-4">
								<p>Quantity</p>
							</div>
							<div class="col span-1-of-4">
								<p>Action</p>
							</div>
						</div>
                        <div class="row">
							<div class="row">
								<div class="col span-1-of-4">
								  <p>Cold Coffee</p>
								</div>
								<div class="col span-1-of-4">
								  <p>40/-</p>
								</div>
								<form method="post" action="order.php">
									<input type="hidden" name="cid" value="<?php echo $csid; ?>">
									<input type="hidden" name="prodname" value="Cold Coffee">
									<input type="hidden" name="prodtype" value="bev">
									<input type="hidden" name="prodprice" value="40">
								<div class="col span-1-of-4">
								  <input type="number" name="prodqnty">
								</div>
								<div class="col span-1-of-4">
									<input class="btn btn-2" type="submit" value="Select" >
								</div>
								</form>
							</div>
							<div class="row">
								<div class="col span-1-of-4">
								  <p>Mirinda Shake</p>
								</div>
								<div class="col span-1-of-4">
								  <p>40/-</p>
								</div>
								<form method="post" action="order.php">
								<input type="hidden" name="cid" value="<?php echo $csid; ?>">
								<input type="hidden" name="prodname" value="Mirinda Shake">
								<input type="hidden" name="prodtype" value="bev">
								<input type="hidden" name="prodprice" value="40">
								<div class="col span-1-of-4">
								  <input type="number" name="prodqnty" >
								</div>
								<div class="col span-1-of-4">
									<input class="btn btn-2" type="submit" value="Select" >
								</div>
								</form>
							</div>
							<div class="row">
								<div class="col span-1-of-4">
								  <p>Chocolate Shake</p>
								</div>
								<div class="col span-1-of-4">
								  <p>40/-</p>
								</div>
								<form method="post" action="order.php">
								<input type="hidden" name="cid" value="<?php echo $csid; ?>">
								<input type="hidden" name="prodname" value="Chocolate Shake">
								<input type="hidden" name="prodtype" value="bev">
								<input type="hidden" name="prodprice" value="40">
								<div class="col span-1-of-4">
								  <input type="number" name="prodqnty" >
								</div>
								<div class="col span-1-of-4">
									<input class="btn btn-2" type="submit" value="Select" >
								</div>
								</form>
							</div>
							<div class="row">
								<div class="col span-1-of-4">
								  <p>Mojito</p>
								</div>
								<div class="col span-1-of-4">
								  <p>40/-</p>
								</div>
								<form method="post" action="order.php">
								<input type="hidden" name="cid" value="<?php echo $csid; ?>">
								<input type="hidden" name="prodname" value="Mojito">
								<input type="hidden" name="prodtype" value="bev">
								<input type="hidden" name="prodprice" value="40">
								<div class="col span-1-of-4">
								  <input type="number" name="prodqnty" >
								</div>
								<div class="col span-1-of-4">
									<input class="btn btn-2" type="submit" value="Select" >
								</div>
								</form>
							</div>
							<div class="row">
								<div class="col span-1-of-4">
								  <p>Orange Juice</p>
								</div>
								<div class="col span-1-of-4">
								  <p>40/-</p>
								</div>
								<form method="post" action="order.php">
								<input type="hidden" name="cid" value="<?php echo $csid; ?>">
								<input type="hidden" name="prodname" value="Orange Juice">
								<input type="hidden" name="prodtype" value="bev">
								<input type="hidden" name="prodprice" value="40">
								<div class="col span-1-of-4">
								  <input type="number" name="prodqnty" >
								</div>
								<div class="col span-1-of-4">
									<input class="btn btn-2" type="submit" value="Select" >
								</div>
								</form>
							</div>
							   <br>
					
							   
									
                      </div>                       
                    </div>
                
                 
			</div>
		  
            </div>
			  </div>
		</header>
	</body>
</html>