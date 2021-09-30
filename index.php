
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Website</title>
</head>
<body>
	<h1>What is your Name?</h1>
	<form action="insert.php" method="post" enctype="multipart/form-data">
		<input type="text" name="fname" id="name">
		<hr>
		<input type="file" name="image" id="fileToUpload">
		<hr>
		<input type="submit" value="Button" name="submit">
	</form>
</body>
</html>
