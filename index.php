<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>XSS filter</title>
</head>
<body>
	<br><br><br><br>
	<center>
		<form method="post" action="">
			<input type="text" name="userInput" placeholder="Type here ....">
			<button type="Submit" name="inputBtn">Submit</button>
		</form>
<?php
//Validate user input
function inputValidation($data)										//inputValidation function which will take a data as parameter
{
	$data = trim($data);											//Strip unnecessary characters from user input
	$data = stripslashes($data);									//remove backslashes from the input
	$data = htmlspecialchars($data);								//Convert special characters to HTML entities
	return $data;													//return data to input variable
}

if (isset($_POST['inputBtn']) && isset($_POST['userInput'])) {		//Check if the user press the button
	$input = inputValidation($_POST['userInput']);					//Get data from user and Validate the data in inputValidation function
	echo "<br><br><h2>" . $input;									//Print user input
}

?>
	</center>
</body>
</html>