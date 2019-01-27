
	<?php

		$num_to_guess=42;
		
		$num_tries = (isset($_POST['num_tries']))? $num_tries + 1 :1;

		if (!isset($_POST['guess'])) {
			$message="Welcome to the guessing machine!";
			//echo "$message";
		} elseif (!is_numeric($_POST['guess'])) {
			$message="I do not understand that response.";
			//echo "$message";
		} elseif ($_POST['guess']==$num_to_guess) {
			header("Location: congrates.html");
			exit;
			//$message="Well done!";
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
			<title>A PHP number guessing script</title>
		</head>
		<body>
		<h1><?php echo $message; ?> </h1>
		<p><strong>Guess number: </strong><?php echo $num_tries; ?></p>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<P><label for="guess">Type your guess here:</label><br>
		<input type="text" name="guess" id="guess"/>
		</P>
		<input type="hidden" name="num_tries" value="<?php echo $num_tries; ?>" />
		<button type="submit" name="submit" value="submit">Submit</button>
		</form>

	</body>
		</html>
		
