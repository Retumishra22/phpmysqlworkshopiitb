<?php
$con = mysqli_connect("localhost","root","","result");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$rec="SELECT * FROM class1 where name='rohan'";
$res= $con->query($rec);
if($res->num_rows >0) {
	while ($row = $res->fetch_assoc()) {
		$marks = $row['total_obtained'];
		$sub5 = $row['sub5'];
		$s5=99;
		$per=$row['percent'];
		$marks=$marks - $sub5 + $s5;
		$per=(float)(($marks/500)*100);
		$update = "update class1 set sub5=$s5, total_obtained=$marks, percent=$per where name='rohan'";
		if($con->query($update)==TRUE){
			echo "Record updated<br>";
		}
		else{
			echo "Error: ".$con->error;
		}
		
	}
}



$con->close();

?>