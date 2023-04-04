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
            <form action="index.php" method="POST" class="login-form">
                <span class="sign-in-text">Sign in</span>
                <input type="text"name="name" class="input--glass name" placeholder="Name">
                <input type="email"name="email" class="input--glass email" placeholder="Email">
                <input type="password"name="password" class="input--glass password" placeholder="Password">
                <input type="number"name="number" class="input--glass no" placeholder="Contact no">
                <span>
                <input type="submit" value="Submit" class="button--glass submit-button">
                </span><br>
                <span class="account-text"> Logn-in page<a href="index.php" class="admin-link">Back</a></span>
                
            </form>
        </div>
    </body>
</html>