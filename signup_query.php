<?php
	$con = mysqli_connect("localhost","root","") or die("Connection Error!!!");
	mysqli_select_db($con,"ajax") or die("Database Error!!!!");	
	$user = $_POST["user"];
	$gen = $_POST["gen"];
	$sql = "insert into users(username,gender) values('$user','$gen');";
	$query = mysqli_query($con, $sql);
	if($sql)
	{
		echo "Record successfully inserted into database";
	}
	else
	{
		echo "Fail to insert";
	}
	mysqli_close($con);
?>