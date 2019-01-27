<!DOCTYPE html>
<html>
<head>
	<title>Hi User</title>
</head>
<body>
<h1>Hi User</h1>
<h3>PHP program that receives a value form "whatsName"</h3>

<?php
	$userName= filter_input(INPUT_GET, "userName");
	print "<h3>Hi there, $userName!</h3>";

?>
</body>
</html>