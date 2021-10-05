<?php
	function palindrome($data)
	{
		$a = $data;
		//Split each letter
		$b = str_split($data);
		$strLen = strlen($data)-1;
		$revStr = '';
		
		//Loops until the last character of the string
		for($i=$strLen; $i>=0; $i--){
			//Gets the last character of the string
			//Then, concat it to another string variable
			$revStr.=$b[$i];
		}
		
		//Check if the reversed string is equal to the original string
		//If true, string is Palindrome
		//Else, Not Palindrome
		if($revStr == $a)
			return 'Palindrome';
		else
			return "Not Palindrome";
	}

?>
<!DOCTYPE html>
<html>
<head>
<title>Palindrome</title>
</head>
<body>
	<form action="index.php">
		<input type="text" id="palindrome" name="palindrome">
		<input type="submit">
	</form>
	<?php 
		if(isset($_GET['palindrome'])){
			$value = $_GET['palindrome'];
			echo palindrome($value);
		}
	?>

</body>
</html>
