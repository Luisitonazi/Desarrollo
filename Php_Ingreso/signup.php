<?php
require 'database.php';

$message = '';
if(!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn ->prepare($sql);
    $stmt ->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt ->bindParam(':password', $password);

    if($stmt->execute()) {
        $message = 'Successfully created new user';
    } else {
        $message = 'Sorry there must have been an issue creating your account';

    }

}
    

?>

<html>
    <head>
        <meta charset="utf-8">
        <tittle>
            SignUp
        </tittle>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sono:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?phprequire"partials/header.php"?>
    
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    
    <h1>SignUp</h1>
    <span> or <a href="login.php">Login</a></span>
    <form action="signup.php" method="post">
            <input type="text" name="email" placeholder="Enter your e mail">
                <input type="password" name="password" placeholder="Enter your password">
                <input type="password" name="confirm_password" placeholder="Confirm your password">
                <input type="submit" value"Submit">
</form>
</body>
</html>