<!DOCTYPE html>
<html>
<head>
	<title>If condition</title>
</head>
<body>

<?php

echo "<h1>If Condition</h1>";

	$weather= "cold";

	if($weather=="cold"){
		echo "Weather is $weather now. It is winter.";
	}
	elseif ($weather=="warm") {
		echo "Weather is $weather now. It is Spring";
	}
	elseif ($weather=="hot") {
		echo "Weather is $weather now. It is summer";
	}
	else{
		echo "Weather is $weather now. It is autumn";
	}

	echo "<br>";
	echo "<h1>--------SwitchCondition-------</h1>";

	echo "<br>";

		
	switch ($weather) {
		case 'cold':
			echo "<h1>Weather is $weather now. It is winter.</h1>";
			break;
		case 'warm':
			echo "Weather is $weather now. It is Spring";
				break;	
		case 'cool':
			echo "Weather is $weather now. It is autumn";
			break;
		
		default:
			echo "Weather is $weather now. It is summer";
			break;
	}


?>

</body>


</html>