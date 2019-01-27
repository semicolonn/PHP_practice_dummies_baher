<!DOCTYPE html>
<html>
<head>
	<title>Scope Demo -php6book</title>
</head>
<body>
<h1>Scope Demo- php6book</h1>
<h2>Demonstrates variable scope</h2>
	
	<?php

		$a= "I have a value";
		$b="I have a value";

		print "<p>Outside the function,<br/>
				\$a is '$a', and <br/>
				\$b is '$b'
				</p>";

		myFunction();

		function myFunction(){

			//make $a global, but not $b

			global $a;

			print "<p>Inside the function, <br/>
			\$a is '$a', and <br/>
			\$b is '$b'</p>";	

		}

	?>


</body>
</html>