<?php

	$filename= "exist.txt";
	$fp= fopen($filename, "r") or die("could not open $filename");
	while (!feof($fp)) {
		$line = fgets($fp, 1024);
		echo $line. "<br>";
	}
?>



