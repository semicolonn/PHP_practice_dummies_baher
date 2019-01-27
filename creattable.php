<?php

	$mysqli= new mysqli("localhost","root","", "courses");// course is name of db.
	if (mysqli_connect_errno()) {
		echo "Connection Failed to database!";
		exist();
	}else{
		echo "<h1 style='color: green'>Connection to database, Established!";
		
		echo "</h1>";
		$sql= "CREATE TABLE testTable
				(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
				restField VARCHAR(75))";
		$res= mysqli_query($mysqli, $sql);
		if ($res=== TRUE) {
			echo "Table testTable successfully created.";
		}else{
			echo "Could not creat table! Try again";
		}

		mysqli_close($mysqli);
	}





	?>