<?php

	$string = "./resources2/img2/";
	$img = "men-avatar.jpg";
	$string = $string.$img;
	echo $string;
?>

<!DOCTYPE html>
<html>

	<body>
		<img src="<?php echo $string; ?>">
	
	</body>


</html>