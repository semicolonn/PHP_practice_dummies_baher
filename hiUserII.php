<!DOCTYPE html>
<html>
<head>
	<title>Hi User</title>
</head>
<body>
<h1>Hi User</h1>

<?php

if (filter_has_var(INPUT_POST, "$userName")){
	//the form exists, so work with it

	$userName= filter_input(INPUT_POST, "$userName");
	print "<h2>Hi there, $userName</h2>";

}

	else{
		//there is no input create the form

		print 

		"<form action="" method="post">

		<fieldset>
		<label>Please enter your name</label>
		<input type="text" name="userName"/>
		<button type="submit">Submit</button>
		</fieldset>
		</form>";

	
	}
	
?>

</body>
</html>