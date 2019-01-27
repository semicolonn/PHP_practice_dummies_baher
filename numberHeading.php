
	<?php

	$num_of_calls=0;

	function numberedHeading($txt){

		global $num_of_calls;
		$num_of_calls++;
		echo "<h1>$num_of_calls $txt </h1>";

	}

	numberedHeading("Widgets");
	echo "<p>We build a fine range of Widgets.</p>";
	numberedHeading("Doodas");
	echo "<p>Finest in the world.</p>";
	numberedHeading("Hello World from a function");
	numberedHeading("this is another Hello World from a function");

	echo "-----------------------------------------------------";
	function numberedHeadingii($txt){

		static $num_of_calls;
		$num_of_calls++;
		echo "<h1>$num_of_calls $txt </h1>";

	}



	numberedHeadingii("Widgets");
	echo "<p>We build a fine range of Widgets.</p>";
	numberedHeadingii("Doodas");
	echo "<p>Finest in the world.</p>";
	numberedHeadingii("Hello World from a function");
	numberedHeadingii("this is another Hello World from a function");


?>
