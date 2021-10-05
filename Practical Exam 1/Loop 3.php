<?php
	$a = 0;
	$b = 1;
	
	for($i=0; $i<10; $i++)
	{
		//The value of c is the sum of variables b and a
		$c = $b + $a;
		echo $c . ' ';

		//Pass the value of b to a and b to c before start the loop from the top
		$a = $b;
		$b = $c;
	}

?>