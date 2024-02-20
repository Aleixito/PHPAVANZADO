<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <h1>Form Data:</h1>
    <p>Name: 
		<?php 
	echo htmlspecialchars($_POST["name"]); 
	?>
	</p>
</body>
</html>