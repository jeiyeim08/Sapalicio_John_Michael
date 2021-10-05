<?php
	echo displayOddNumber(1);
	
	function displayOddNumber($i)
	{
		$a = '';
		do{
			//Checks if the value of i has a remainder if divided into 2. 1 is Odd and 0 is Even
			if($i%2 != 0)
			{
				$a .= $i . ' ';
			}
			$i++;
		}while($i <= 10);
		
        return $a;
	}

?>