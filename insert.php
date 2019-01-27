<?php
	$mysqli= mysqli_connect("localhost", "root", "", "courses");
	
	if (mysqli_connect_errno()) {
		echo "Connection faild!";
		exit();
	}else{
		$clean_text= mysqli_real_escape_string($mysqli, $_POST['testfield']);
		$sql= "INSERT INTO testTable (testField) VALUES('".$clean_text."')";
		$res= mysqli_query($mysqli, $sql);

		if ($res=== TRUE) {
			echo "<p style='color: green'>A record has been inserted to database!</p>";
		}else{
			echo "<p style='color: red'>Could not insert record!</p>";
		}
	mysqli_close($mysqli);
	}



?>