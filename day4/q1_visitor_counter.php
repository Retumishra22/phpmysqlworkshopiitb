<?php
$con = mysqli_connect("localhost","root","","result");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$rec="SELECT * FROM svc where id='1'";
$res= $con->query($rec);
if($res->num_rows >0) {
	while ($row = $res->fetch_assoc()) {
		$id = $row['id'];
		$count = $row['count'];
		$countnew= $count + 1;
		$update = "update svc set count=$countnew where id='1'";
		echo "You have visited the account $countnew times<br>";
		if($con->query($update)==TRUE){
			echo "Record updated<br>";
		}
		else{
			echo "Error: ".$con->error;
		}
		
	}
}

?>