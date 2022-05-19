<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="library/css/student-login.css">
  <link rel="stylesheet" href="library/css/register-modal.css">
  <script defer src="library/js/register-modal.js"></script>
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

      <div id="register-modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <form action="" class="modal-form">
            <center class="grid-col-span-7 mb-3"><label class="h2">Personal Information</label>
              <hr></center>

            <input type="file" class="form-control grid-col-span-7">
            <input type="text" class="form-control grid-col-span-2" name="firstname" placeholder="First Name">
            <input type="text" class="form-control grid-col-span-2" name="middlename" placeholder="Middle Name">
            <input type="text" class="form-control grid-col-span-2" name="lastname" placeholder="Last Name">
            <input type="text" class="form-control grid-col-span-1" name="Ext." placeholder="Ext.">
            <input type="text" class="form-control grid-col-span-1" name="gender" placeholder="Gender">
            <input type="date" class="form-control grid-col-span-2" name="birthday">
            <input type="text" class="form-control grid-col-span-1" name="school-year" placeholder="S.Y.">
            <input type="text" class="form-control grid-col-span-3" name="course" placeholder="Course">
            <input type="text" class="form-control grid-col-span-7" name="guardian-contact" placeholder="Guardian Contact">

            <center class="grid-col-span-7 mt-3"><label class="h2">Address</label>
              <hr></center>

            <input type="text" class="form-control">
            <input type="text" class="form-control">
            <input type="text" class="form-control">
            <input type="text" class="form-control">
            <input type="text" class="form-control">
            <input type="text" class="form-control">
            <input type="text" class="form-control">
            <input type="text" class="form-control">
            <button class="btn">Register</button>
          </form>
        </div>
      </div>

    </div>
</body>
</html>