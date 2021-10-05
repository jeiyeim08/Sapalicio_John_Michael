<?php
	echo sumEvenNumber(1);
	
	function sumEvenNumber($i)
	{
		$a = 0;
    	while($i <= 10)
        {
			//Checks if the value of i has a remainder if divided into 2. 1 is Odd and 0 is Even
            if($i%2 == 0)
            {
                $a = $a + $i;
            }
            $i++;
        }
        
        return $a;
	}

?>