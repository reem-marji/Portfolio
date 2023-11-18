<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = null;
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Website</title>
    <style>

        header {
                background-color: #3ba576;
                color: #fff;
                text-align: center;
                padding: 70px;
            
        }

        body {
            font-family: "Arial", sans-serif;
            background-color: #3ba576;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 70vh;
        }

        .btn {
            background: white;
            border-radius: 8px;
            font-family: Arial;
            color: #40a474;
            font-size: 20px;
            padding: 10px 20px;
            text-decoration: none;
            margin: 10px;
            cursor: pointer;
        }

        .btn:hover {
            background: #8bff87;
        }

        .cancel{
            color:white;
            text-decoration: none;
        }

        .bottom-container {
            background-color: white;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .login-btn {
            order: 2;
        }

        .signup-btn {
            order: 1;
        }
        h1,h3, p{
            color: white;
        }

        .logout{
            font-size: 20px; 
        }

    </style>
</head>

<body>
    <header>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </header>
    <div class="container">
            <h1>Reem Marji's Portfolio</h1>
            <h3>select an option to enter</h3>
            <a href="signup.php" class="btn">Sign Up</a>
            <a href="login.php" class="btn">Login</a>
    </div>

</body>

</html>
