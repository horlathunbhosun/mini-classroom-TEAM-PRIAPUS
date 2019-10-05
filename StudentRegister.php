<?php

//$connect = mysqli_connect($servername, $username, $password $nameofthetablewhereuserinfoistobesubmitted);
 // $connect = mysqli_connect('localhost', 'root', '', 'class_db');
include('dbcon.php');
session_start();

$sel2 = mysqli_query($connect, "SELECT * FROM class_tb");

    
 if(isset($_POST['submit']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pword = $_POST['pass'];
    $cpword = $_POST['cpass'];
    $class = $_POST['class'];
    // $_SESSION['fname']=$name; 


    $sel = mysqli_query($connect, "SELECT * FROM teacher_tb WHERE email ='$email' ");
    $res = mysqli_num_rows($sel);

    // echo $class;

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
      mysqli_query($connect, "INSERT INTO student_tb(firstname,lastname,email,password) VALUES ('$fname','$lname','$email','$pword')");
      $que = mysqli_query($connect, "SELECT * FROM item_tb LEFT JOIN class_tb ON item_tb.class_id=class_tb.id WHERE class_tb.id=$class");
      // $sel2 = mysqli_query($connect, "SELECT * FROM class_tb WHERE");
      $que2 = mysqli_fetch_array($que);
      $row1 = $que2['item'];
      $_SESSION['row']=$row1;   
      $_SESSION['course']=$que2['class_name'];


      // echo "<h3 style='color:red;'>Registration Sucess</h3>";
      // echo json_encode($que2); 
      // echo $que2['item'];

      header("location:studentDashboard.php");
    }
  }
  else
  {
    // echo"<h3 style='color:red;'>Registration UnSucessful</h3>";  
  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SIGNUP &mdash; PRIAPUS</title>   
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/regstyle.css">
</head>
<body>
  <div class="container-full" id="login-box">
    <div class="left-box">
      <div class="welcome-section">
          <h2>Welcome to Priapus online classroom</h2>
          <h3>New to our site? Don't worry we'll get you started in no time. Signup to get started.</h3>
          <!-- <p class="signIn mt-5">Already have an account sign in <a href="login.html ">Here</a></p> -->
      </div>
    </div>
  </div>
  <div class="right-box align-items-center">
    <a href="index.html" class="text-primary"><h5><b>Home</b></h5></a>
    <div class="login-container d-flex align-items-center justify-content-center">
      <form class="signup-form text-center" method="post">
        <h1 class="mb-3">SIGN-UP</h1>
        <div class="form-group">
          <input type="text"name="fname" class="form-control form-control-lg" placeholder="First Name">
        </div>
        <div class="form-group">
            <input type="text" name="lname" class="form-control form-control-lg" placeholder="Last Name">
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control form-control-lg" placeholder="email">
        </div>
        <div class="form-group">
          <input type="password" name="pass" class="form-control form-control-lg" placeholder="Password">
        </div>
        <div class="form-group">
          <input type="password" name="cpass" class="form-control form control-lg" placeholder="Password Again">
        </div>
        <div class="form-group">
          <select class="form-control selectpicker" name="class" required>
            <option value="">&mdash;Select a course &mdash;</option>
           <?php
      while ($row=mysqli_fetch_array($sel2)){
        echo "<option value=". $row['id']. ">".$row['class_name']."</option>";
      }
      ?>
          </select>
        </div>
       <!--  <div class="form-group">
          <select name="student-or-teacher" class="form-control selectpicker" required>
            <option value="">Student</option>
            <option value="">Teacher</option>
          </select>
        </div> -->
        <!-- <div class="forgot-link d-flex align-items-center justify-content-between">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label for="remember">By clicking the signup button below you accept our terms and coditions!</label>
          </div>
        </div> <br> -->
        <div class="form-group">
          <button type="submit" class="btn mt-5" name="submit">Sign Up</button>
        </div>
      </form>
    </div>
  </div>  
</body>    
</html>