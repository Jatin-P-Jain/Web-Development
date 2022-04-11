<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Vastra</title>
		<link rel="stylesheet" type="text/css" href="resources2/css2/add.css">
    </head>
	<body>
		<?php
		session_start();
		$sellid = $_SESSION['sid']  ;
  			$link = mysqli_connect("localhost", "root", "");
		  mysqli_select_db($link,"shopping");
		  $sql = "SELECT prod_id,name FROM products WHERE sell_id='".$sellid."'";
		  $result = mysqli_query($link,$sql);
		 while ($row = mysqli_fetch_array ($result)){

        ?>

        <form action="Delegate_update.php" method="post">
            <input type="checkbox" name="Namex" value=" " size=10>
            <?php echo $row ['prod_id']; ?> &nbsp;<?php echo $row ['name']; ?>
            <input type="submit" name="submit" value="Update">
        </form>
        <?php
        }
        ?>
		
	</body>
</html>

characteristics
stages