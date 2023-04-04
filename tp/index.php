<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="background">
        <form action="login.php" method="POST" class="login-form">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
                <span class="sign-in-text">Sign in</span>
                <input type="email" name="email" class="input--glass email" placeholder="Email">
                <input type="password" name="passward" class="input--glass password" placeholder="Password">
                <span>
                <input type="submit" value="Login" class="button--glass login-button">
                </span><br>
              
                <span class="account-text">Are You Admin? <a href="admin.php" class="admin-link">Admin</a></span>
                <span class="register-text">, <a href="register.php" class="register-link">Register</a></span>
            </form>
        </div>
    </body>
</html>