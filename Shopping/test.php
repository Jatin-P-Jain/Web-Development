<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Vastra</title>
		<link rel="stylesheet" type="text/css" href="resources2/css2/add.css">
    </head>
	<body>
		<?php
  			$link = mysqli_connect("localhost", "root", "");
		  mysqli_select_db($link,"shopping");
		  $sql = "SELECT size FROM products WHERE type='shirt'";
		  $result = mysqli_query($link,$sql);
		$row = mysqli_fetch_array ($result);
		  
		$sql1 = "SELECT sell_id FROM seller";
		$result1 = mysqli_query($link,$sql1);
		$row1 = mysqli_fetch_array ($result1);
		$inte = $row1['sell_id'];
		echo $inte;
		mysqli_close($link);
			?>
		<h2><?php echo $row['size']; ?></h2><br>
		
	</body>
</html