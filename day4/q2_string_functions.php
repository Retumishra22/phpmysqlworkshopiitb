<!DOCTYPE html>
<html>
<head>
	<title>String</title>
</head>
<body>
<form accept="" method="POST">
<input type="text" name="name"><br>
<button>Submit</button><br>
<?php
$name=$_POST['name'];
$exp= explode(" ", $name);
echo "$name<br>";
echo "1. Count number of Characters in the string: ".strlen($name);
echo "<br>";
echo "2. Breaking down a string into an array: ".$exp[2];
echo "<br>";
echo "3. Reverse the string: ".strrev($name);
echo "<br>";
echo "4. Convert all alphabetic characters in string to their lower case form: ".strtolower($name);
echo "<br>";
echo "5. Convert all alphabetic characters in string to their upper case form: ".strtoupper($name);
echo "<br>";
echo "6. Declare a substring and replace the content of substring into original string: ".substr_replace($name, 'hi', 4);
?>
</form>
</body>
</html>
