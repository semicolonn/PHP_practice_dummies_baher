<!DOCTYPE html>
<html>
<head>
	<title>checkDemo.php</title>
</head>
<body>

<?php

	$total=0;

	if (filter_has_var(INPUT_POST, "chkFries")) {
		echo "<p>You wanted fries</p> 	\n";
		$total += filter_input(INPUT_POST, "chkFries");
	}
	if (filter_has_var(INPUT_POST, "chkSoda")) {
		echo "<p>You wanted Soda</p> \n";
		$total+=filter_input(INPUT_POST, "chkSoda");
		
	}
	if (filter_has_var(INPUT_POST, "chkShake")) {
		echo "<p>you wanted Shake</p> \n";
		$total+=filter_input(INPUT_POST, "chkShake");
	}
	if (filter_has_var(INPUT_POST, "chkKetchup")) {
		echo "<p>you wanted Ketchup</p>\n";
		$total+=filter_input(INPUT_POST, "chkKetchup");
	}
	print "<p>The total cost is: \$$total</p> \n"; // \$ means get dollar sign 
?>

</body>
</html>
