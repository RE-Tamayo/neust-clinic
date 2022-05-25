<?php
	require_once "dbconnection.php";

    if(!empty($_POST)){
        $usernameError = null;
        $emailError = null;
        $passwordError = null;

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $valid = true;
        if (empty($username)) {
            $usernameError = 'Please enter Username';
            $valid = false;
        }

        $valid = true;
        if (empty($email)) {
            $emailError = 'Please enter Email';
            $valid = false;
        }

        $valid = true;
        if (empty($password)) {
            $passwordError = 'Please enter Password';
            $valid = false;
        }

        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO students (username, email, password) values (?, ?, ?)";
            $query = $pdo->prepare($sql);
            $query->execute(array($username, $email, $password));
            Database::disconnect();
            header("Location: ../../index.php");
        }
    }
?>


<div class="modal" id="modal2">
    <div class="modal-dialog">
        <header class="modal-header">
        Register
        <button class="close-modal" aria-label="close modal" data-close>✕</button>
        </header>
        <section class="modal-content">
            <form action="library/php/register.php" method="POST">
                <div class="input_container">
                    <i class="fas fa-envelope"></i>
                    <input placeholder="Username" type="text" name="username" id="field_username" class='input_field' required>
                </div>
                <div class="input_container">
                    <i class="fas fa-envelope"></i>
                    <input placeholder="Email" type="email" name="email" id="field_email" class='input_field' required>
                </div>
                <div class="input_container">
                    <i class="fas fa-lock"></i>
                    <input  placeholder="Password" type="password" name="password" id="field_password" class='input_field' required>
                </div>
        </section>
        <footer class="modal-footer">
                <div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
        </footer>
        </form>
    </div>
</div>

<script src="library/js/modal.js"></script>
