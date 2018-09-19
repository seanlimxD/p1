<?php
$quotes = array("If everyone on the planet planted their feet really firmly into the ground, would the earth stop spinning?",
		"If two people on opposite sides of the earth dropped a piece of bread at the same time, would that make an earth sandwich?",
		"Are homeless people truly homeless, or is the entire world their house?");
?>
<!DOCTYPE html>
<html>
<head>
	<link href='css/index.css' rel='stylesheet'>
</head>
<body>

    <h1>Sean Lim</h1>

    <p id = 'intro'>
		<img src = "images/meirl.png" alt = "hey thats me"> 
		<br />
    	I'm Sean, a former child prodigy and current mediocre adult. I somehow convinced the people around me that I was smart for nearly eighteen years.
    </p>

    <p id = 'quote'>
    	<em> “ </em>
    	<?php 
    		echo $quotes[rand(0,2)];
    	?>
    	<em> ” </em>
    </p>

</body>
</html>