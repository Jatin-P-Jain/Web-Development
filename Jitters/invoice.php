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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script> 
        $(document).ready(function(){
          $("#coupons").click(function(){
            $(this).text($(this).text() == 'Show Coupons' ? 'Hide Coupons' : 'Show Coupons');
              if($(this).text() == 'Hide Coupons'){
            $(".coupons-box").addClass("enlarged");
            
              }
              else{
                  $(".coupons-box").removeClass("enlarged");
              }
            $(".coupons").slideToggle("slow");
              
          });
        });
        $(document).ready(function(){
            $(".apply1, .apply2").click(function(){
            $('#coupons').text($("#coupons").text() == 'Show Coupons' ? 'Hide Coupons' : 'Show Coupons');
              if($(this).text() == 'Hide Coupons'){
            $(".coupons-box").addClass("enlarged");
            
              }
              else{
                  $(".coupons-box").removeClass("enlarged");
              }
            $(".coupons").slideToggle("slow");
            $("#new_total").show();
              
          });
        });

            $(document).ready(function(){
                $("#amnt").css({"color": "#e67e22", "font-size": "150%"});
                $("#amnt").text("₹"+$("#total").text());
                 });
            
            $(document).ready(function(){
              $(".apply1").click(function(){
                  $('#coupon').val($("#code1").text());
                  $("#discount").text("- 10% : ₹"+ (0.1*($("#total").text())).toFixed(2));
                  $("#discount").show(1000);
                  $("#amnt").css({"color": "#e67e22", "font-size": "150%"});
                    $("#amnt").text("₹"+(0.9*($("#total").text())).toFixed(2));
              });
                $(".apply2").click(function(){
                    $('#coupon').val($("#code2").text());
                  $("#discount").text("- 7% : ₹"+ (0.07*($("#total").text())).toFixed(2));
                  $("#discount").show(1000);
                  $("#amnt").css({"color": "#e67e22", "font-size": "150%"});
                    $("#amnt").text("₹"+(0.93*($("#total").text())).toFixed(2));
              });
        });
            
            $(document).ready(function(){
            $("#pod, #pn").click(function(){
                $('#amount').val($("#amnt").text());
              
        });
            });

            
        </script>
		
        <title>OmniFood</title>
    </head>
    <body>
       <header >
          <section class="page2" id="cities-scroll">
            <div class="row">
                <h2>Select Payment Option</h2>
            </div>
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
                    
			  		$sql = "SELECT SUM(price) as total FROM orders where cust_id=$csid ";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array ($result);
					$total=$row['total'];
			  		$vat=$total*0.05;
			  		$gtotal=$total+$vat;
			  
			  		$sql1 = "INSERT INTO invoices (cust_id,total,vat,gtotal)
							VALUES ('$csid','$total','$vat','$gtotal')";
			  		$result1 = mysqli_query($conn,$sql1);
              
				?>
			  <div class="invoice">
				  <p>Price :₹<span><?php echo $total; ?></span></p>
				  		<p>+</p>
				  <p>GST : ₹<span><?php echo $vat; ?></span></p> <br>
				  <p>Total: ₹<span id="total" class="gtotal"><?php echo $gtotal;?></span></p>
                  
                 <center>
                    <div class="coupons-box">
                        <a id="coupons" href="#" style="font-size:80%;">Show Coupons</a>
                        <div class="coupons">
                         <div class="row">
                        <div class="col span-1-of-3">
                         <span id="code1" style="font-size: 80%; color: #e67e22; font-weight:400;">OMNIFOOD10</span>
                            </div>
                        <div class="col span-1-of-3">
                            </div>
                             <div class="col span-1-of-3">
                         <div class="apply1 apply_btn" href="#">Apply Code</div>
                            </div>
                         </div>
                         <div class="row">
                        <div class="col span-1-of-3">
                         <span id="code2" style="font-size: 80%; color: #e67e22; font-weight:400;">OMNIFOOD7</span>
                            </div>
                        <div class="col span-1-of-3">
                            </div>
                             <div class="col span-1-of-3">
                         <div class="apply2 apply_btn" href="#">Apply Code</div>
                            </div>
                         </div>
                     </div>
                     </div>
                  </center> 
                  <div>
                  <p id="new_total" style="display:none; font-size:90%; color:green;">Code Applied Successfully!</p>
                <p id="discount" style="display:none; font-size:80%; color:green;"></p>
                  <p style="font-size:150%;"> Amount to be paid: <span id="amnt"></span> </p>
              </div>
			  </div>
              
             
			  
            
                <form method="post" action="last.php">
                    <input id="coupon" type="hidden" name="coupon">
                    <input id="amount" type="hidden" name="amount">
                    <input type="hidden" name="csid" value="<?php echo $csid; ?>" >
                    <div style="margin-bottom:10.6%;" class="row">
				   <div class="col span-1-of-2">
			     <input id="pod" type="submit" style="margin-left:30%; padding:10px 20px;border-radius:10px; background-color:#3f4d71; border:2px solid #3f4d71;"class="btn btn-1" value="Pay on Delivery">
				   </div>
				   <div class="col span-1-of-2">
				    <input id="pn" type="submit" id="pay" style="margin-left:30%; padding:10px 20px;border-radius:10px; background-color:#55ae95; border:2px solid #55ae95;" class="btn btn-1" value="Pay Now" onclick="return confirm('Confirm To Pay')">
				   </div>
                    </div>   
                    </form>
			             
                

        </section>
        
		</header>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.jsdelivr.net/selectivizr1.0.3b/1.4.2/selectivizr.min.js"></script>
		<script src="vendors1/js/jquery.waypoints.min.js"></script>
		<script src="resources1/js/scripts.js"></script>

		<script>
			// Get the modal
			var modal = document.getElementById('id03');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
		</script>
    </body>
    
    
</html>

<!---









----->