<?php

function printBr($text){

	echo $text."<br>";
}

echo "<b>Below lines are called by printBr() function</b><br>";

printBr("This is a line.");
printBr("This is a new line.");
printBr("this is yet another line.");






?>