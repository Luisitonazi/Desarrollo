

<html>
    <head>
        <meta charset="utf-8">
        <tittle>Login</tittle>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sono:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>
        
        <h1>Login</h1>
        <span> or <a href="signup.php">Signup</a></span>
        <?php if (!empty($message)):?>
            <p><?=$message ?></p>
            <?php endif;?>
        <form action="login.php" method="post">
            <input type="text" name="email" placeholder="Enter your e mail">
                <input type="password" name="password" placeholder="Enter your password">
                <input type="submit" value"Send">
</form> 
            </boyd>
</html>