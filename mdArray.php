
<?php


	$character= array(
				array(	'name' =>'Bob' ,
						'occupation' => 'superhero',
						'age'=> 30,
						'special power' => 'x-ray vision'
					),
				array('name' => 'Sally',
						'occupation' => 'superhero',
						'age' => 24,
						'special power' => 'superman strenght'
						 ),
				array('name' => 'Jane',
						'occupation' => 'arch villian',
						'age' => 45,
						'special power'=> 'nanotechnology')
				);


		foreach ($character as $c) {
			while (list($k, $v)= each($c)) {
				echo "$k...$v<br>";
			}
			echo "<hr>";
		}



?>