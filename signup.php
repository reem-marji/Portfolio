<?php

$error1 = '';
$error2 = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $fullName = $_POST['full_name'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $dob = $_POST['dob'];


    $users = json_decode(file_get_contents('users.json'), true);

    foreach ($users as $user) {
        if ($user['username'] === $username) {
            $error1 = 'Username already exists. Please choose a different one.';
            break;
        }
    }

    if (empty($error1)) {
        
        function checkPasswordStrength($password) {
            $letter = preg_match('@[a-z]@', $password);
            $number = preg_match('@[0-9]@', $password);
            
            $minLength = 8;
            
            if($letter && $number && (strlen($password) >= $minLength)){
                return true;
            }
            else{
                return false;
            }
        }

        if (!checkPasswordStrength($password)) {
            $error2 = 'Password must contain at least one letter, one number, and be at least 8 characters long.';
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $user = [
                'username' => $username,
                'full_name' => $fullName,
                'password' => $hashedPassword,
                'sex' => $sex,
                'dob' => $dob,
            ];

            $users[] = $user;
            file_put_contents('users.json', json_encode($users));

            header('Location: index.php');
            exit;
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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

        h1 {
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

        input,
        select {
            padding: 8px;
            margin-bottom: 12px;
            width: 100%; 
            box-sizing: border-box;
            border: 1px solid #40a474;
            border-radius: 4px;
        }

        button {
            background: #40a474;
            border-radius: 8px;
            font-family: Arial;
            color: #ffffff;
            font-size: 20px;
            padding: 10px 20px;
            text-decoration: none;
            cursor: pointer;
            outline: none;
            border: none;
            margin-bottom: 10px; 
        }

        button:hover {
            background: #8bff87;
        }

        .login-link {
            font-size: 16px;
            color: #40a474;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

    <script>
        function validatePassword() {
            var password = document.getElementById('password').value;
            return checkPasswordStrength(password);
        }
    </script>
</head>

<body>

    <form method="post" action="" onsubmit="return validatePassword();">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <?php if ($error1): ?>
            <p style="color: red;"><?php echo $error1; ?></p>
        <?php endif; ?>

        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <?php if ($error2): ?>
            <p style="color: red;"><?php echo $error2; ?></p>
        <?php endif; ?>

        <label for="sex">Sex:</label>
        <select name="sex" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" required>

        <button type="submit">Sign Up</button>

        <a href="login.php" class="login-link">Already have an account? <strong>Login</strong></a>
    </form>
</body>

</html>
