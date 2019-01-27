
<?php


	$character= array('name' =>'Bob' ,
						'occupation' => 'superhero',
						'age'=> 30,
						'special power' => 'x-ray vision'
					);
	echo "<h1>" .$character['occupation']. "</h1>";
	$character['supername']= 'mega x-ray Guy';

	echo $character['name'];
?>