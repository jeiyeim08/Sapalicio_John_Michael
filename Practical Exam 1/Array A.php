<?php
	$boys = "";
	$names = array('Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian');
	sort($names); // Sort the array objects Aphabetically
	
	//Count per name total on the array
	$values = array_count_values($names);

	//Display Name with their total count on array
	foreach($values as $key=>$value)
	{
		echo $key ."=". $value;
		echo "<br/>";
	}
	
	echo '<br/>';
	
	$clength = count($names);
	//Display all Names on the Array
	for($i=0; $i < $clength; $i++)
	{
		echo $names[$i] . " ";
	}

?>