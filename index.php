<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log-In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="library/css/login.css">
</head>

<body>
    <div id="form_wrapper">
        <div id="form_left">
            <img src="library/assets/neust_logo.png" alt="computer icon">
            <h1>NEUST CLINIC</h1>

        </div>
        <div id="form_right">
            <div id="form-image">
                <img src="library/assets/neust_logo.png" alt="neust_logo" class="image">
            </div>
            <h1>Student Login</h1>
            <form id="login-form" action="library/php/login.php" method="POST">
                <div class="input_container">
                    <i class="fas fa-envelope"></i>
                    <input placeholder="Email" type="email" name="email" id="field_email" class='input_field'>
                </div>
                <div class="input_container">
                    <i class="fas fa-lock"></i>
                    <input  placeholder="Password" type="password" name="password" id="field_password" class='input_field'>
                </div>
                <input type="submit" value="Login" id='input_submit' class='input_field' onclick="submitData()">
            </form>
            <span><a href="#" id="reset-password open-modal" data-open="modal1">Forgot Password ?</a></span>
            <span id='create_account'>
                <a href="#" data-open="modal2">Create your account &#x27A1; </a>
            </span>
        </div>
    </div>

    <?php
        include "library/php/reset-password-modal.php";
        include "library/php/register.php";
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>