<!DOCTYPE html>
<html>
<head>
	<title>triangle</title>
</head>
<body>
<form accept="" method="get">
	<input type="number" name="first"><br>
	<input type="number" name="second"><br>
	<input type="number" name="third"><br>
	<button>Submit</button>
<?php 
$first=$_GET['first'];
$second=$_GET['second'];
$third=$_GET['third'];

	if($first==$second && $second==$third){
		echo "Equilateral triangle";
	}
	elseif($first==$second || $first==$third || $second==$third){
		echo "Isosceles triangle";
	}
	elseif (hypot($first, $second)==$third || hypot($second, $third)==$first || hypot($first, $third)==$second){
		echo "Right angle triangle";
	}
	else {
		echo "Scalene triangle";
	}

?>
</form>
</body>
</html>