<?php

	//insert record by this code to phpmyadmin
	$mysqli= mysqli_connect("localhost", "root", "", "courses");
	if (mysqli_connect_errno()) {
		echo "Failed to connect!";
		exit();
	}else{

		$sql= "INSERT INTO testTable (testField) values('somevalue2')";
		$res= mysqli_query($mysqli,$sql);
		if ($res===TRUE) {
			echo "<p style='color: green'>A record has been inserted</p>";
		}else{
			echo "<p style='color: red'>Could not insert record!</p>";
		}
		mysqli_close($mysqli);
	}
	?>