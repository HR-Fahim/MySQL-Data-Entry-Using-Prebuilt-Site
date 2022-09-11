<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login to Job Portal</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form action="signin.php" id="login-form" method="post">
  <div class="heading">Login</div>
  <div class="left">
    <label for="email">Email</label> <br />
    <input type="email" name="email" placeholder="Email" required="required"/> <br />
    <label for="password">Password</label> <br />
    <input type="password" name="password" placeholder="Password" required="required"/> <br />
    <div class="col-mt-4">
    <a href="#" class="float-right">Forgot Password?</a>
    </div>

    <input type="submit" name="Signin" value="sign in" />

  </div>
  <div class="right">
    <div class="connect">Connect with</div>
    <a href="" class="facebook">
<!--       <span class="fontawesome-facebook"></span> -->
      <i class="fa fa-facebook" aria-hidden="true"></i>
    </a> <br />
    <a href="" class="twitter">
<!--       <span class="fontawesome-twitter"></span> -->
      <i class="fa fa-twitter" aria-hidden="true"></i>
    </a> <br />
    <a href="" class="google-plus">
<!--       <span class="fontawesome-google-plus"></span> -->
      <i class="fa fa-google-plus" aria-hidden="true"></i>
    </a>
  </div>
</form>
<!-- partial -->
  <script  src="js/script.js"></script>

</body>
</html>
