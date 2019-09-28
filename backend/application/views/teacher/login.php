
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LOGIN &mdash; PRIAPUS</title>   
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/css/style.css">
</head>
<body>
  <div class="container-full" id="login-box">
      <div class="left-box">
          <div class="reg">
            <h2>Welcome to Priapus online classroom</h2>
            <h3>New to our site? Don't worry we'll get you started in no time. Click the SignUp link below to get started.</h3>
            
              <a href="<?= base_url()?>index.php/teacher/signup" class="submit-btn mt-5">Sign Up</a>
          </div>  
      </div>
        
      <div class="right-box align-items-center">
          <div class="login-container d-flex align-items-center justify-content-center">
            <form class="login-form text center" action="" method="post">
             <?php if (isset($_SESSION['error'])) { ?>
                            <?php echo $_SESSION['error']; ?>
                        <?php } ?>
             <center> <strong><p style="color:red;"> <?php echo validation_errors(); ?> </p> </strong> </center>

                <h1 class="mb-5 ">WELCOME BACK!</h1>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="password">
                </div>       
                <div class="forgot-link d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label for="remember">Remember Password</label>
                </div><br>
              
              </div>
              <button name="submit" type="submit" class="submit-btn mt-5">Login</button>
            </form>
      </div>
    </div>
</body>    
</html>