<script>
	var text = "TheQuickBrownFoxJumpsOverTheLazyDog.";
	
	//Split each letter of the string
	text = text.split("");
	
	var finalText = "";
	for(var i=0; i<text.length; i++)
	{
		//Check if the character is UpperCase
		if(text[i] == text[i].toUpperCase())
		{
			if(text[i] != ".")
			{
				//If true, then add space before the character
				finalText += " " + text[i];
			}
			else{
				//Else, add to the string variable for display
				finalText += text[i];
			}
		}
		else
		{
			finalText += text[i];
		}
	}
	console.log(finalText.trim());
	
</script>
