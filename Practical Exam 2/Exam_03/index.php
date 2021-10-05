<?php
	
	function isSquare($num) 
	{ 
		//Check if num is perfect square
		$s = (int)(sqrt($num)); 
		return ($s * $s == $num); 
	} 
	
	function isFibonacci($n) 
	{ 
		//Check if n is a perfect square using the formula
		//5*n*n + 4 or 5*n*n - 4
		return isSquare(5 * $n * $n + 4) ||  
			   isSquare(5 * $n * $n - 4); 
	} 
	  
	//Create loop from 1 to 10
	for ($i = 1; $i <= 10; $i++) 
	{
		if(isFibonacci($i)) 
			echo "$i is Fibonacci Number<br/>"; 
		else
			echo "$i is Not Fibonacci Number<br/>"; 
	}
?>