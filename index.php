<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log-In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="library/css/login.css">
</head>

<body>
    <div id="form_wrapper">
        <div id="form_left">
            <img src="library/assets/neust_logo.png" alt="computer icon">
            <h1>NEUST CLINIC</h1>

        </div>
        <div id="form_right">
            <center><img src="library/assets/neust_logo.png" alt="computer icon" class="image" id="form-image"></center>
            <h1>Student Login</h1>
            <div class="input_container">
                <i class="fas fa-envelope"></i>
                <input placeholder="Email" type="email" name="Email" id="field_email" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input  placeholder="Password" type="password" name="Password" id="field_password" class='input_field'>
            </div>
            <input type="submit" value="Login" id='input_submit' class='input_field'>
            <span>Forgot <a href="#"> Password ?</a></span>
            <span id='create_account'>
                <a href="#">Create your account &#x27A1; </a>
            </span>
        </div>
    </div>
</body>

</html>