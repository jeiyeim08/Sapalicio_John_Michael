<?php
	$color = array('red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold');
	
	//Get count of each color on the array
	$values = array_count_values($color);
	
	foreach($values as $key=>$value)
	{
		//Check if color count is equal to 1, Means the color is unique
		if($value == 1)
		{
			echo $key . ' ';
		}
	}
	
?>