<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A new OmniFood Website Created By a Young Indian Chap.">
        <link rel="stylesheet" type="text/css" href="vendors1/css1/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors1/css1/Grid.css">
        <link rel="stylesheet" type="text/css" href="vendors1/css1/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors1/css1/animate.css">
        <link rel="stylesheet" type="text/css" href="resources1/css1/orderplaced22222.css">
        <link rel="stylesheet" type="text/css" href="resources1/css1/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
		
		<link rel="apple-touch-icon" sizes="180x180" href="/resource1/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/resources1/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/resources1/favicons/favicon-16x16.png">
	<link rel="manifest" href="/resources1/favicons/site.webmanifest">
	<link rel="mask-icon" href="/resources1/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/resources1/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="/resources1/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

		
		
        <title>OmniFood</title>
    </head>
    <body>
       <header>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           <script>
           $(document).ready(function(){
                $("#icon").show(1000);
                 });
           </script>
           <?php
			$servername ="localhost";
			$username ="root";
			$password ="";
			$dbname ="food";
            $custid=$_POST['csid'];
           
			$conn =new mysqli($servername, $username, $password, $dbname);
			$sql1 = "SELECT * FROM signupcid where cust_id='".$custid."'";
			$result1 = mysqli_query($conn,$sql1);
			$row1 = mysqli_fetch_array($result1);
			$custname=$row1['name'];
           $sql1 = "UPDATE invoices SET coupon='".$_POST['coupon']."',amount='".$_POST['amount']."' where cust_id=".$custid;
			$result1 = mysqli_query($conn,$sql1);
           ?>
          <section class="page2" id="cities-scroll">
            <div class="row">
                <h2>Order Placed</h2>
            </div>
              <i class="ion-ios-checkmark icon-verybig"></i>
              <center>Dear   <span style="color:#e67e22; font-size:200%;margin:1%;margin-bottom:2%;"><?php echo $custname?> ,</span></center>
              
              <div class="row details">
                 <div class="city-features">
                        <i class="ion-ios-lightbulb icon-small"></i>
                        Your Bill is Ready.
                    </div>
                    <div class="city-features">
                        <i class="ion-android-bicycle icon-small"></i>
                        We ll be reaching You in next 20-30 mins...
                    </div>
                    <div class="city-features">
                        <i class="ion-cash icon-small"></i>
                        Collect your Order and Bill from our Delivery Boy.
                    </div>
					  <div class="city-features">
                        <i class="ion-ios-telephone icon-small"></i>
                        +91-9636245681
                    </div>
			  </div>
			  
			  <div class="row note">
			  	<h3>NOTE: kindly share last 4-digits of your mobile no. with the delivery boy to verify</h3>
			  </div>
               <div class="row">
				   <div class="col span-1-of-2">
			     <a class="btn btn-2 " onclick="document.getElementById('id03').style.display='block'" href="#">Feedback</a>
				   </div>
				   <div class="col span-1-of-2">
				    <a style="margin-left:280px;"class="btn btn-1" href="exit.php?cid=<?php echo $custid; ?>">Thank You</a>
				   </div>
			   </div>   
			  
			  
               <div id="id03" class="modal">
				  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal"></span>
				  <form  method="post" class="modal-content" action="feedbck.php">
					<div class="container">
					  <h2>Feedback</h2>
					  <p>We would like your feedback to improve our Services.</p>
					  <hr>
						<div class="row">
							<div class="col span-1-of-3 labels">
								  <label>Name (Optional)</label>
							</div>
							<div class="col span-2-of-3">
								  <input type="text" name="name" id="name" placeholder="Enter Your Name">
							</div>
						</div>    
					  

					<div class="row">
                        <div class="col span-1-of-3">
                              <label>Quality Of Food?</label>
                            &nbsp;
                        </div>
                        <div class="col span-2-of-3">
							<div class="col span-1-of-3">
                            <input type="radio" name="quality" value="Bad" >Bad</div>
							<div class="col span-1-of-3">
							<input type="radio" name="quality" value="Good">Good</div>
							<div class="col span-1-of-3">
							<input type="radio" name="quality" value="Excellent" required>Excellent</div>
                        </div>
                    </div>    
						<div class="row">
						<div class="col span-1-of-3">
                              <label>Delivery Service</label>
                            &nbsp;
                        </div>
							<div class="col span-2-of-3">
							<input type="range" name="speed" style="width: 450px; margin-bottom: 15px"> <br>
								<div class="row">
								<div class="col span-1-of-3">Slow</div> 
								<div class="col span-1-of-3">Moderate</div> 
								<div class="col span-1-of-3">Fast</div> 
								</div>
							</div>
						</div>
					 	<div class="row">
                        <div class="col span-1-of-3 labels">
                              <label>How did you find us?</label>&nbsp;
                        </div>
                        <div class="col span-2-of-3">
                            <select name="findus" id="find-us" placeholder="Tell Us!">
                                <option value="friends">Friends</option> 
                                <option value="internet">Internet</option> 
                                <option value="ad">Advertisement</option> 
                                <option value="other">Other</option> 
                            </select>
                        </div>
                    </div> 
						 <div class="row">
                        <div class="col span-1-of-3 labels">
                              <label>Suggestions,Opinions or Complaints?<br>Let us Know.</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your Message"></textarea>
                        </div>
                    </div>    
						<div class="clearfix row">
						  <a class="btn btn-2" href="#" onclick="document.getElementById('id03').style.display='none'">Later</a>
							<input type="hidden" name="custid" value="<?php echo $csid; ?>">
							<input type="submit" class="btn btn-1"href="#" value="Send">
					  </div>
					</div>
				  </form>
				</div>    

        </section>
        
		</header>
		
    </body>
    
    
</html>

<!---


exit.php?cid=<?php echo $csid; ?>






----->