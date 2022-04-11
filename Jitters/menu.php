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
					
			$csid=$_GET['cid'];
			
			?>

		  <div class="plans js--plans" id="plans-scroll">
            <div class="row">
                <h2 class="heading">Health is wealth!</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2">
                    <div class="plan-box">
                        <div>
                            <h3 class="menu-cat">Starters</h3>
                            <p class="plan-price">₹60/-<span>      per item</span></p>
                            <p class="plan-price-meal">Choose anything!</p>
                        </div>
                        <div>
                            <ul>
                                <img class="menu_pic" src="resources1/img/16.jpg">
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="starters.php?cid=<?php echo $csid; ?>" class="btn btn-1">Go Ahead >></a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-2">
                    <div class="plan-box">
                        <div>
                            <h3>Main Course</h3>  
                            <p class="plan-price">₹99/-<span>    per item</span></p>
                            <p class="plan-price-meal">Choose Anything!</p>
                        </div>
                        <div>
                            <ul>
                                <img class="menu_picm" src="resources1/img/12.jpeg">
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="mainc.php?cid=<?php echo $csid; ?>" class="btn btn-1">Go Ahead >></a>
                        </div>
                    </div>
                </div>
			  </div>
			  <div class="row">
                 <div class="col span-1-of-2">
                    <div class="plan-box">
                        <div>
                            <h3>Desserts</h3>
                            <p class="plan-price">₹75/-<span>    per item</span></p>
                            <p class="plan-price-meal">Choose Anything!</p>
                        </div>
                        <div>
                            <ul>
                                <img class="menu_pic" src="resources1/img/20.jpg">
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="desserts.php?cid=<?php echo $csid; ?>" class="btn btn-1">Go Ahead >></a>
                        </div>
                    </div>
                </div>
				<div class="col span-1-of-2">
                    <div class="plan-box">
                        <div>
                            <h3>Beverages</h3>
                            <p class="plan-price">₹40/-<span>    per item</span></p>
                            <p class="plan-price-meal">Choose Anything!</p>
                        </div>
                        <div>
                            <ul>
                                <img class="menu_pic" src="resources1/img/10.jpeg">
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a href="beverages.php?cid=<?php echo $csid; ?>" class="btn btn-1">Go Ahead >></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</header>
	</body>
</html>