<?php

	$filename= "exist.txt";
	$fp= fopen($filename, "r") or die("could not open $filename");
	while (!feof($fp)) {
		$chunk = fread($fp, 8);
		echo $chunk. "<br>";
	}
?>



