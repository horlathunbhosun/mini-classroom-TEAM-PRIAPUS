<?php

	include('dbcon.php');

	if (isset($_POST['submit'])) 
	{
		$cname = $_POST['cname'];

		mysqli_query($connect, "INSERT INTO class_tb(class_name) VALUE ('$cname')");
		// echo "<h3 style='color:green;'>Course Succesfully added</h3>";
		header("location:showClass.php");
	}

?>