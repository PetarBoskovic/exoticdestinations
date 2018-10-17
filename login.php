<?php
    session_start();
    include 'classes/DB.php';
    $messageForUser = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'classes/User.php';
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = new User($username, $password);

        $user = $user->login();

        if ($user) {
            header('Location: index.php');
        } else {
            $messageForUser = 'Pogresan username ili password';
        }
    }

    include "partials/header.php";
?>

<div class="login-wrapper">
    <div id="login_container">
        <div class="login-top">
            <p>Login to your account</p>
        </div>
        <div class="login-form">
            <form action="" method="post">
                <p>Username</p>
                <input type="text" name="username" autocomplete="off" placeholder="&nbsp;Username" required>
                <p>Password</p>
                <input type="password" name="password" placeholder="&nbsp;Password" required>
                <input type="submit" name="login" value="login">
                <div class="no-account">
                    <a href="register.php">I do not have an account.<span>Create one!</span></a>
                </div>
            </form>
            <?php if ($messageForUser) : ?>
            <p>
                <?php echo $messageForUser; ?>
            </p>
            <?php endif; ?>

        </div><!-- end login_form -->


    </div><!-- end login_container -->

    </section><!-- end choose_bar -->

    <?php
    include "partials/footer.php";
?>