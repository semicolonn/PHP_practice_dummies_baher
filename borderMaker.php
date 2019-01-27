<!DOCTYPE html>
<html>
<head>
	<title>Your Output</title>
</head>
<body>
<h1>Your Output</h1>
<div style="text-align: center">

<?php
// retrieve all the variables

$basicText = filter_input(INPUT_POST, "basicText");
$borderSize = filter_input(INPUT_POST, "borderSize");
$sizeType = filter_input(INPUT_POST, "sizeType");
$borderStyle = filter_input(INPUT_POST, "borderStyle");


$theStyle = <<<HERE
"border-width: $borderSize $sizeType";
border-style: $borderStyle;
border-color: green"
HERE;

print "<div style=$theStyle>";
print $basicText;
print "</div>";


?>
	
</div>
</body>
</html>
