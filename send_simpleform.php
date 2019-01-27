	<!DOCTYPE html>
	<html>
	<head>
		<title>A simple response</title>
	</head>
	<body>
	<p>Welcome, <strong>

	<?php echo $_POST['user'] //this 'user' is taken from the text field name?>
		
	</strong>!</p>
	<p>Your message is:</p>
	<strong>
	<?php echo $_POST['message'] //this 'message' is taken from the textarea field name?>
	</strong>
	</body>
	</html>

	