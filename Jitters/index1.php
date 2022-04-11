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
        <link rel="stylesheet" type="text/css" href="resources1/css1/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
		
		<link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png">
	<link rel="manifest" href="/resources/favicons/site.webmanifest">
	<link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/resources/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

		
		
        <title>OmniFood</title>
    </head>
    <body>
		<?php
			$servername ="localhost";
			$username ="root";
			$password ="";
			$dbname ="food";		
			$conn =new mysqli($servername, $username, $password, $dbname);
			
			$email=$_SESSION['email'];
			$sql1 = "SELECT * FROM signupcid where email='".$email."'";
			$result1 = mysqli_query($conn,$sql1);
			$row1 = mysqli_fetch_array($result1);
			$custid=$row1['cust_id'];
				
			$_SESSION['cid']=$custid;		
			
			
			?>
       <header>
           <nav>
               <div class="row">
                   <img src="resources1/img/logo.png" alt="Logo" class="logo">
                   <img src="resources1/img/logo-black.png" alt="Logo" class="logo-black">
                   <ul class="main-nav js--main-nav">
                       <li><a href="#features-scroll">Food Delivery</a></li>
                       <li><a href="#work-steps">How It Works</a></li>
                       <li><a href="#cities-scroll">Our Cities</a></li>
                       <li><a href="menu.php?cid=<?php echo $custid; ?>">Menu</a></li>
                  </ul>
                  <a class="mob-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                
               </div>
           
           </nav>
         <div class="hero-text">
                <h1>Hello there!<br>Everything For Everyone.</h1>
                <a class="btn btn-1 js--scroll-plans" href="menu.php?cid=<?php echo $custid; ?>">I'm hungry</a>
                <a class="btn btn-2 js--scroll-features" href="#">Show me more</a>
         </div>		   
		   
        </header>
        <section class="features js--features" id="features-scroll">
            <div class="row">
                
            <h2>Get food fast &mdash; not fast food.</h2>
                <p class="long-copy">
                        Hello, we're Omnifood. We know you're always busy. No time for cooking. So let us take care of that, we're really good at it, we promise!
                 </p>
            </div>
                <div class="row js--wp-1">
                    
                    <div class="col span-1-of-4 box">
                        <i class="ion-ios-calendar icon-big"></i>
                        <h3>Up to 365 days/year</h3>
                        <p>
                            Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
                        </p>
                    </div>
                    <div class="col span-1-of-4 box">
                         <i class="ion-ios-timer icon-big"></i>
                        <h3>Ready in 20 minutes</h3>
                        <p>
                           You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.
                        </p>
                    </div>
                    <div class="col span-1-of-4 box ">
                        <i class="ion-ios-nutrition icon-big"></i>
                        <h3>100% organic</h3>
                        <p>
                            All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
                        </p>
                    </div>
                    <div class="col span-1-of-4 box">
                        <i class="ion-ios-cart icon-big"></i>

                        <h3>Order anything</h3>
                        <p>
                            We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
                        </p>
                    </div>    
            </div>
        </section>
        <section class="meals">
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="resources1/img/1.jpg" alt="Pizza">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources1/img/2.jpg" alt="Rice Bowl">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources1/img/3.jpg" alt="Pasta">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources1/img/4.jpg" alt="Club Sandwich">
                    </figure>
                </li>
            </ul>
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="resources1/img/5.jpg" alt="Burger">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources1/img/6.jpg" alt="Salad">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources1/img/7.jpg" alt="Soup">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources1/img/8.jpg" alt="Desert">
                    </figure>
                </li>
            </ul>
        </section>
        
        <section class="steps" id="work-steps">
            <div class="row">
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 steps-box js--wp-2">
                    <img src="resources1/img/app-iPhone.png" alt="app on i-phone" class="app-screen">
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step">
                        <div>1</div>
                    <p>Choose the food that you want to enjoy from the menu.</p>
                    </div>
                    <div class="works-step">
                        <div>2</div>
                    <p>Order your delicious food using our mobile app or website. Or you can even call us!</p>
                    </div>
                    <div class="works-step">
                        <div>3</div>
                    <p>Enjoy your food after less than 20 minutes. See you the next time!</p>
                    </div>
                    
                    <a href="#" class="btn-app"><img src="resources1/img/18671-17964-appstore-top-l.jpg" alt="App-store"></a>
                    <a href="#" class="btn-app"><img src="resources1/img/download-app-android.png" alt="Play-store"></a>
                </div>
            </div>
        </section>
        
        <section class="cities" id="cities-scroll">
            <div class="row">
                <h2>Cities We Work in</h2>
            </div>
            <div class="row js--wp-3">
                <div class="col span-1-of-4 box">
                    <img src="resources1/img/blr_3.jpg" alt="Banglore">
                    <h3>Banglore</h3>
                    <div class="city-features">
                        <i class="ion-android-happy icon-small"></i>
                        1600+ happy eaters
                    </div>
                    <div class="city-features">
                        <i class="ion-android-restaurant icon-small"></i>
                        60+ top chefs
                    </div>
                    <div class="city-features">
                        <i class="ion-social-instagram icon-small"></i>
                        <a href="#">@omnifood_blr</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources1/img/Mumbai.jpg" alt="Mumbai">
                    <h3>Mumbai</h3>
                    <div class="city-features">
                        <i class="ion-android-happy icon-small"></i>
                        3700+ happy eaters
                    </div>
                    <div class="city-features">
                        <i class="ion-android-restaurant icon-small"></i>
                        160+ top chefs
                    </div>
                    <div class="city-features">
                        <i class="ion-social-instagram icon-small"></i>
                        <a href="#">@omnifood_bom</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources1/img/Delhi.jpg" alt="Delhi">
                    <h3>Delhi</h3>
                    <div class="city-features">
                        <i class="ion-android-happy icon-small"></i>
                        1400+ happy eaters
                    </div>
                    <div class="city-features">
                        <i class="ion-android-restaurant icon-small"></i>
                        50+ top chefs
                    </div>
                    <div class="city-features">
                        <i class="ion-social-instagram icon-small"></i>
                        <a href="#">@omnifood_del</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources1/img/Chennai.jpg" alt="Chennai">
                    <h3>Chennai</h3>
                    <div class="city-features">
                        <i class="ion-android-happy icon-small"></i>
                        3000+ happy eaters
                    </div>
                    <div class="city-features">
                        <i class="ion-android-restaurant icon-small"></i>
                        200+ top chefs
                    </div>
                    <div class="city-features">
                        <i class="ion-social-instagram icon-small"></i>
                        <a href="#">@omnifood_maa</a>
                    </div>
                </div>
            </div>
        </section>
		
		
        
        <section class="customers">
            <div class="row">
                <h2>Our Customers, our pride!</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <blockquote>
                        I was looking for a quick and easy food delivery service in Banglore. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                    </blockquote>
                    <cite><img src="resources1/img/customer-1.jpg" alt="Anjali Sinha">Anjali Sinha</cite>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                       Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Bombay, but no one comes even close to Omifood. Me and my family are so in love!
                    </blockquote>
                    <cite><img src="resources1/img/customer-3.jpg" alt="Jinkle Pancholi">Jinkle Pancholi</cite>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                      Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                    </blockquote>
                    <cite><img src="resources1/img/customer-2.jpg" alt="Minika Chetry">Minika Chetry</cite>
                </div>
            </div>
        </section>
        
        
        
                
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li> 
                        <li><a href="#">Blog</a></li> 
                        <li><a href="#">Press</a></li> 
                        <li><a href="#">iOS App</a></li> 
                        <li><a href="#">Android App</a></li> 
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2017 OmniFood.All Rights Reserved.
                </p>
            </div>
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.jsdelivr.net/selectivizr1.0.3b/1.4.2/selectivizr.min.js"></script>
		<script src="vendors1/js/jquery.waypoints.min.js"></script>
		<script src="resources1/js/scripts.js"></script>

		<script>
			// Get the modal
			var modal = document.getElementById('id01');

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