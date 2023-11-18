<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = json_decode(file_get_contents('users.json'), true);

    foreach ($users as $user) {
        if (
            $user['username'] === $username &&
            password_verify($password, $user['password'])
        ) {
            $_SESSION['username'] = $username;
            header('Location: MainPage.php');
            exit;
        }
    }

    $error = 'Invalid username or password';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #fbfdfc;
            text-align: center;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            color: #40a474;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
            max-width: 400px; 
            width: 100%; 
            box-sizing: border-box;
        }

        label {
            margin-bottom: 8px;
            color: #40a474;
            text-align: left; 
            width: 100%; 
            box-sizing: border-box;
        }

        input {
            padding: 8px;
            margin-bottom: 12px;
            width: 100%; 
            box-sizing: border-box;
            border: 1px solid #40a474;
            border-radius: 4px;
        }

        .error-message {
            color: #ff0000;
            margin-bottom: 10px;
        }

        button {
            background: #40a474;
            border: none; 
            border-radius: 8px;
            font-family: Arial;
            color: #ffffff;
            font-size: 20px;
            padding: 10px 20px;
            text-decoration: none;
            cursor: pointer;
            outline: none; 
            margin-bottom: 10px; 
        }

        button:hover {
            background: #8bff87;
        }

        button:active {
            transform: translateY(2px); 
        }

        .signup-link {
            font-size: 16px;
            color: #40a474;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <?php
        if (isset($error)) {
            echo '<div class="error-message">' . $error . '</div>';
        }
        ?>

        <button type="submit">Login</button>

        <a href="signup.php" class="signup-link">Don't have an account? <strong>Sign Up</strong></a>
    </form>
</body>

</html>
