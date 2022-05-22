<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="library/css/student-login.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: #1A1F7C;">

	<div class="container">
      <div class="row login-container">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 logo-container text-center">
          <img src="library/assets/neust_logo_animated.gif" alt="logo" class="logo mt-5">
          <h5 class="mt-3">Welcome to Neust Clinic</h5>
          <a href="#student">Not a student?<br>Click here.</a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-container text-center">
          <h1 class="login-header">Log-In</h1>
          <hr>
        <div class="d-flex justify-content-center mb-3">
          <form class="login-form">
            <input type="text" name="username" placeholder="Username." class="form-control field mb-5">
            <input type="password" name="password" placeholder="Password." class="form-control field mb-5">
            <button type="submit" class="m-2 mt-3 login-button">Log-In</button>
          </form>
        </div>
        <a class="m-2" id="register" href="#">Register</a>
        <a class="m-2" id="password-reset" href="#">Forgot Password?</a>
      </div>
    </div>
  </div>
</body>
</html>