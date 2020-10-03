<!DOCTYPE html>
<html>
<head>
	<title>Report card</title>
</head>
<body>
<form action="" method="POST">
	<input type="text" name="name" placeholder="Name"><br>
	<input type="number" name="sub1" placeholder="Marks out of 100"><br>
	<input type="number" name="sub2" placeholder="Marks out of 100"><br>
	<input type="number" name="sub3" placeholder="Marks out of 100"><br>
	<input type="number" name="sub4" placeholder="Marks out of 100"><br>
	<input type="number" name="sub5" placeholder="Marks out of 100"><br>
	<input type="submit" value="Submit">

<?php
$con = mysqli_connect("localhost","root","","result");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$name=$_POST['name'];
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub3=$_POST['sub3'];
$sub4=$_POST['sub4'];
$sub5=$_POST['sub5'];
$total_obtained=$sub1+$sub2+$sub3+$sub4+$sub5;
$percent=($total_obtained/500)*100;
$total_marks=500;

echo "Name of student: $name<br>";
echo "Marks in Each Subject<br>";
echo "Subject 1: $sub1<br>";
echo "Subject 2: $sub2<br>";
echo "Subject 3: $sub3<br>";
echo "Subject 4: $sub4<br>";
echo "Subject 5: $sub5<br>";
echo "Total Marks Obtained: $total_obtained<br>";
echo "Total Marks: 500<br>";
echo "Percentage: $percent% <br>";
 
// Attempt insert query execution
$sql = "INSERT INTO class1 (name, sub1, sub2, sub3, sub4, sub5, total_obtained, total_marks, percent) VALUES ('$name', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$total_obtained', '$total_marks', '$percent')";
if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);

?>