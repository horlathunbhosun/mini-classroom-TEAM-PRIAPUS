<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SIGNUP &mdash; PRIAPUS STUDENT SIGNUP</title>   
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/css/regstyle.css">
</head>
<body>
  <div class="container-full" id="login-box">
    <div class="left-box">
      <div class="welcome-section">
          <h2>Welcome to Priapus online classroom</h2>
          <h3>New to our site? Don't worry we'll get you started in no time. Signup to get started.</h3>
          <p class="signIn mt-5">Already have an account sign in <a href="<?= base_url()?>index.php/student/login">Here</a></p>
      </div>
    </div>
  </div>
  <div class="right-box align-items-center">
    <div class="login-container d-flex align-items-center justify-content-center">
      <form class="signup-form text-center" action="" method="post">
              <?php if (isset($_SESSION["success"])) { ?>
                        <?php echo $_SESSION["success"]; ?>
                        <?php } ?>

                        <?php if (isset($_SESSION['error'])) { ?>
                            <?php echo $_SESSION['error']; ?>
                        <?php } ?>
            <center> <strong><p style="color:red;"> <?php echo validation_errors(); ?> </p> </strong> </center>

            <h1 class="mb-3">STUDENT SIGN-UP</h1>
        <div class="form-group">
          <input type="text"name="name" class="form-control form-control-lg" placeholder="Full Name">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
        </div>
        <div class="form-group">
          <input type="password" name="passconf" class="form-control form control-lg" placeholder="Comfirm Password">
        </div>
        <div class="form-group">
          <select name="class[]" multiple="multiple" class="form-control selectpicker" required>
            <option value="">&mdash;Select Your Class &mdash;</option>
            <?php foreach($class as $key => $class):?>
            <option value="<?= $class->id;?>"><?= $class->class_name;?></option>
            <?php endforeach;?>
          </select>
          <small>Press the control key and select multiple classes</small>
        </div>
        <div class="forgot-link d-flex align-items-center justify-content-between">
          <div class="form-check">
            <input type="checkbox" required class="form-check-input" id="remember">
            <label for="remember">By clicking the signup button below you accept our terms and coditions!</label>
          </div>
        </div> <br>
        <div>
          <button type="submit" class="btn mt-3" name="submit">Sign Up</button>
        </div>
      </form>
    </div>
  </div>  
</body>    
</html>