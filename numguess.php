
	<?php

		$num_to_guess=42;
		if (!isset($_POST['guess'])) {
			$message="Welcome to the guessing machine!";
			//echo "$message";
		} elseif (!is_numeric($_POST['guess'])) {
			$message="I do not understand that response.";
			//echo "$message";
		} elseif ($_POST['guess']==$num_to_guess) {
			$message="Well done!";
			//echo "$message";
		} elseif ($_POST['guess'] > $num_to_guess) {
			$message= $_POST['guess']." is too big! Try a smaller number.";
			//echo "$message";
		} elseif ($_POST['guess'] < $num_to_guess) {
				$message= $_POST['guess']. "is small! Try a larger number.";
			//	echo "$message";
		} else{
					$message="I am terribly confused.";
			//		echo "$message";
				}
			
	?>



	<!DOCTYPE html>
		<html>
		<head>
			<title>An HTML form the calls itself</title>
		</head>
		<body>
		<h1><?php echo $message; ?> </h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<P><label for="guess">Type your guess here:</label><br>
		<input type="text" name="guess" id="guess"/>
		</P>
		<button type="submit" name="submit" value="submit">Submit</button>
		</form>

	</body>
		</html>
		
