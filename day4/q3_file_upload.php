<!DOCTYPE html>
<html>
<head>
	<title>File upload</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="myfile"><p>
<input type="submit" name="upload"><p>

<?php 
$name = $_FILES['myfile']['name'];
$type = $_FILES['myfile']['type'];
$size = $_FILES['myfile']['size'];
$temp = $_FILES['myfile']['tmp_name'];
$error = $_FILES['myfile']['error'];

move_uploaded_file($temp, "uploaded/".$name);
echo "File uploaded";
?>
</form>
</body>
</html>