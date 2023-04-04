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
        <form action="admintable.php" method="POST" class="login-form">
         <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
                <span class="sign-in-text">Log in</span>
                <input type="email"name="email" class="input--glass email" placeholder="Email">
                <input type="password"name="passward" class="input--glass password" placeholder="Password">
                <span>
                <input type="submit" value="Login" class="button--glass login-button">
                </span><br>
              
              
                <span class="account-text"> Logn-in page<a href="index.php" class="admin-link">Back</a></span>
            </form>
        </div>
    </body>
</html>