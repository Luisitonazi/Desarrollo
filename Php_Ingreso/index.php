<?php
session_start();
require'databse.php';

if(isset($_SESSION['users_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam('id', $_SESSION['users_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user =null;

    if(count($results) > 0) {
        $user = $results;

    
}
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <tittle>
            Welcome to your App
        </tittle>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sono:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <header>
        <a href="/Php_Ingreso">Your Name App</a>
    </header>
    <h1>Please Login or SignUp</h1>
    <a href="login.php">Login</a> or 
    <a href="signup.php">SignUp</a>

</body>
</html>