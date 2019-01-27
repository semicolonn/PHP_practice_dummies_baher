
<?php
/*
	if (file_exists('exit.txt')) {

		echo "file exist! <br>";
		include 'exist.txt';

	}

	else 
		echo "Such file is not exist."; 


	echo "<br>" 

	if (is_readable('exist.txt')) {
		echo "exist.txt is readable.";
	}
	exit();
	if (is_executable('exist.txt')) {
		echo "exit.txt is writable.";
	}

	*/
	echo "this size of exist.txt is:" .filesize('exist.txt'). "bytes<br>";
		
	$atime= fileatime("exist.txt");
	echo "exist.txt was last access on" .date("D d M Y g: i A", $atime);


		?>