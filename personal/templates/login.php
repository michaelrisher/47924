<?php
include_once '../config/global.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include '../assets/inc/meta.php';
    ?>
</head>
<body>

<?php
include '../assets/inc/header.php';
?>
<!-- end of header -->

<div id="main" class="clear"><span class="tm_bottom"></span>
    <div class="smallForm login">
        <div class="loginWrapper">
            <h1>Login</h1>
            <div class="margin15_bottom aligncenter">Don't have an account register one <a href="<?php echo APP_URL?>templates/signUp.php?ref=login.php">here</a></div>
            <form class="loginForm">
                <div class="errors"></div>
                <label>Username
                    <input type="text" name="username" placeholder="Username" data-type="username" />
                </label>
                <label>Password
                    <input type="password" name="password" placeholder="Password" data-type="password" />
                </label>
                <input type="submit" value="Login" />
            </form>
        </div>
    </div>
</div>
<!-- end of main -->

<?php
include APP_URL . 'assets/inc/footer.php';
?>
</body>
</html>