<?php

	include('dbcon.php');

	if (isset($_POST['submit'])) 
	{
		$email = $_POST['email']; 
		$pword = $_POST['pass'];


		$select = mysqli_query($connect, "SELECT * FROM teacher_tb WHERE email ='$email' AND password='$pword' ");
		$result = mysqli_num_rows($select);


		if ($result == 1)  //This line ensure there are we have only one user with the login details used to login
			{
				echo "<h3 style='color:red;'>Login Successful</h3>";
				header("location:TeacherDashboard.html");
			}
			else{
				echo "<h3  style='color:red;'>Incorrect Details</h3>";
			}
	}
	else{
		echo "Not Logged in";
	}

?>

