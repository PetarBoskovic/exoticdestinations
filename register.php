<?php
    session_start();
    include 'autoload.php';
    $messageForUser = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'classes/User.php';
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User($username, $password, $email);

        $validationResult = $user->isValid();

        if ($validationResult === true) {
            $user->create();
            header('Location: login.php');
        } else {
            $messageForUser = $validationResult;
        }
    }

    include 'partials/header.php';
?>
        
<div class="register-wrapper">
    <div id="register_container">
        <div class="register-top">
            <p>Create your account</p>
        </div>
        <div class="register-form">
            <form action="" method="post">
                <p>Username</p>
                <input type="text" name="username" autocomplete="off" placeholder="&nbsp;Username" required>
                <p>E-mail</p>
                <input type="text" name="email" autocomplete="on" placeholder="&nbsp;E-mail" required>
                <p>Password</p>
                <input type="password" name="password" placeholder="&nbsp;Password" required>
                <input type="submit" name="login" value="create account">
                <div class="yes-account">
                    <a href="login.php">I already have an account.<span>Log In!</span></a>
                </div>
            </form>
            <?php if ($messageForUser) : ?>
                <p>
                    <?php echo $messageForUser; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>   

<?php
    include "partials/footer.php";
?> 
         


