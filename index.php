<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
   <link rel="stylesheet" href="index.css">
</head>
<body>

    <div class="container">
        <div class="logo"><img src="icons/logo.png" alt=""width="250"></div>
        <div class="container2">
        <div class="login">
            <form action="indexaction.php" method="POST">
<input type="text" name="Email" placeholder="enter your username or email"><br>
<input type="password" name="Passwords"placeholder="enter your password"><br>
<button type="submit" name="submit">Login</button>
<h4>Don't have an account
<a href="signup.php"><font color="orange">Sign Up</font></a> Here.</h4>
</div>

        </div>
        <div class="footer">
<h6 class="copy">&copy; 2022 &nbsp;&nbsp;
       
              Built with &#10084; by Ranny</h6>
</div>
    </div>
</body>
</html>