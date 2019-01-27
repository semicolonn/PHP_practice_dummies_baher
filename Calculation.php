<!DOCTYPE html>
<html>
<head>
	<title>Calculation by PHP</title>
</head>
<body>

<h1>This is a simple calculation App PHP</h1>

<?php
	#below function defined with 3 paramenters pass which do math operations simply
	function CalcOpt($num1, $num2, $OptSign){

		if ($OptSign=="+") {
			$result= $num1+$num2;
			echo "<h2>Addition result of $num1 & $num2 is: $result</h2>";
		}
		elseif ($OptSign=="*") {
			$result= $num1*$num2;
			echo "<h2>Multiplication result of $num1 & $num2 is: $result</h2>";	
		}

		elseif ($OptSign=="/") {
			$result= $num1/$num2;
			echo "<h2>Divide result of $num1 & $num2 is: $result</h2>";
		}

		elseif ($OptSign=="-") {
			$result= $num1-$num2;
			echo "<h2>Minus result of $num1 & $num2 is: $result</h2>";
		}
	}

	#here function has been called for perform operation as divide... 

	CalcOpt(223,22,"*");
	CalcOpt(223,22,"/");
	CalcOpt(223,22,"+");
	CalcOpt(223,22,"-");

?>

</body>
</html>

















