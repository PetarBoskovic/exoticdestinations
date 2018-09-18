<?php
    session_start();
    include 'classes/DB.php';
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
        
<section id="choose_bar" class="wrapper">
    <div id="register_container">
        <div class="register_top">
            <p>Create your account</p>
        </div>
        <div class="register_form">
            <form action="" method="post">
                <label>Username</label><br>
                <input type="text" name="username" autocomplete="off" placeholder="&nbsp;Username" required>
                <label>E-mail</label><br>
                <input type="text" name="email" autocomplete="on" placeholder="&nbsp;E-mail" required>
                <label>Password</label><br>
                <input type="password" name="password" placeholder="&nbsp;Password" required>
                <input type="submit" name="login" value="create account">
                <div class="yes_account">
                    <a href="login.php">I already have an account.<span>Log In!</span></a>
                </div>
            </form>
            <?php if ($messageForUser) : ?>
                <p>
                    <?php echo $messageForUser; ?>
                </p>
            <?php endif; ?>
        </div><!-- end register_form --> 
    </div><!-- end register_container -->  
</section><!-- end choose_bar -->      

<?php
    include "partials/footer.php";
?> 
         


