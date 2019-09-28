<?php

//$connect = mysqli_connect($servername, $username, $password $nameofthetablewhereuserinfoistobesubmitted);
 // $connect = mysqli_connect('localhost', 'root', '', 'class_db');
include('dbcon.php');


 		
 if(isset($_POST['submit']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$pword = $_POST['pass'];
		$cpword = $_POST['cpass'];

		$sel = mysqli_query($connect, "SELECT * FROM teacher_tb WHERE email ='$email' ");
		$res = mysqli_num_rows($sel);

		if (empty($fname))
		 {
			echo "<h3 style='color:red;'>Firstname field is empty </h3>"; 
		}
		elseif ($res == 1) {
			echo "<h3 style='color:red;'>Email already exists</h3>"; 
		}
		else if (empty($lname))
		 {
			echo "<h3 style='color:red;'>Lastname feild is empty</h3>"; 
		}
		else if (!filter_var($email,FILTER_VALIDATE_EMAIL))
		 {
			echo "<h3 style='color:red;'>Email field is incorect </h3>"; 
		}
		else if (empty($email)) 
		{
			echo "<h3 style='color:red;'>Email field is empty </h3>"; 
		}
		else if ($pword !== $cpword) {
			echo "<h3 style='color:red;'>Password Mismatch</h3>"; 
		}
		else{
			mysqli_query($connect, "INSERT INTO teacher_tb(firstname,lastname,email,password) VALUES ('$fname','$lname','$email','$pword')");
			header("location:TeacherRegister.html") ;
			echo "<h3 style='color:red;'>Registration Sucess</h3>";
		}
	}
	else
	{
		echo"<h3 style='color:red;'>Registration UnSucessful</h3>";
	}
 ?>