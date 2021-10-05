<?php
	$file = "hello_there.php";
	$fileName = $file;
	//Create and Open the file
	$createFile = fopen($fileName, 'w') or die("Unable to open file!");;
	
	//To be written on the PHP File
	$written =  "
		<?php
			// This is a comment
			
			echo 'This is a test page!';
			echo 'Exam number two!';
			// This is the end of a comment
		?>
	";

	//Write's the value of the variable $written
	fwrite($createFile,$written);
	
	//Closes the file opened
	fclose($createFile);

?>