<!DOCTYPE html>
<html>
<head>
	<title>Switch Dice Program</title>
</head>
<body>
<h1>SwitchDice</h1>
<h3>Demonstrates switch structure</h3>

<?php

	$roll= rand(1,6);
	switch ($roll) {
		case 1:
			$romValue="I";
			break;
		case 2:
			$romValue="II";
			break;
		case 3:
			$romValue="III";
			break;
		case 4:
			$romValue="IV";
			break;
		case 5:
			$romValue="V";
			
				break;	
		case 6:
			$romValue="VI";
				break;
		default:
			print "This is an illegal die!";
	} //end switch

	
		?>

<p>Refresh this page in the browser to roll anthor die</p>

</body>
</html>

11