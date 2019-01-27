<?php
/*
	$mysqli= new mysqli("localhost","root","");
	if (mysqli_connect_errno()) {
		printf("Connection failed: %s\n", mysqli_connect_error());
		exist();
	}else{
		echo "<h1>";
		printf("Host information:%s\n", mysqli_get_host_info($mysqli));
		echo "</h1>";
	}

	*/ //OR USE BELOW SELF CREATED CODE FOR CONNECTION TO MYSQL;

	$mysqli= new mysqli("localhost","root","");
	if (mysqli_connect_errno()) {
		echo "Connection Failed to database!";
		exist();
	}else{
		echo "<h1 style='color: green'>Connection to database, Established!";
		
		echo "</h1>";
	}





	?>