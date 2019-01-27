<?php



	$counter=0;
	$counter++;
	var_dump($counter);

	echo "<h1><b>$counter</h1>";

	$counter--;
	echo "<h1><b>$counter</h1>";
	var_dump($counter);

	$counter+=2;
	print "<h1>$counter</h1>";
	var_dump($counter);

	$counter/=4;
	echo "<h1>$counter</h1>";

	var_dump($counter);
	echo "<br>";
	echo "-------------------------------------------------------<br>";

	$string= "<h1>Hello \n\t World</h1>";
	echo "$string";

	$number= 10;
	$string1= "There are '$number' people in line.";
	echo $string1;

	$stringA= _Hello_;
	$stringB= _World_;
	$stringall= $stringA.$stringB;
	echo $stringall;
	echo "<br>";
	echo "Date items";

	$today= date("Y/m/d");
	echo "<h1>$today</h1>";

?>