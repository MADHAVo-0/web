<?php
include 'includes/db.php'; // Include database connection
session_start();

// Initialize variable to control form visibility
$show_register = false;

// If the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        // Login logic
        $username = $cred_conn->real_escape_string($_POST['username']);
        $password = $cred_conn->real_escape_string($_POST['password']);

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $cred_conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // Verify password
            if (password_verify($password, $user['password'])) {
                // Login successful
                $_SESSION['username'] = $user['username'];
                header('Location: index.php'); // Redirect to home page
                exit;
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "No account found with that username.";
        }
    } elseif (isset($_POST['register'])) {
        // Registration logic
        $username = $cred_conn->real_escape_string($_POST['username']);
        $email = $cred_conn->real_escape_string($_POST['email']);
        $password = $cred_conn->real_escape_string($_POST['password']);
        $confirm_password = $cred_conn->real_escape_string($_POST['confirm_password']);

        if ($password === $confirm_password) {
            // Check if the username already exists
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = $cred_conn->query($sql);

            if ($result->num_rows === 0) {
                // Hash the password
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                // Insert user into the database
                $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

                if ($cred_conn->query($sql) === TRUE) {
                    $_SESSION['username'] = $username;
                    // Registration successful, revert to login form
                    header('Location: account.php'); // Redirect to the same file (account.php)
                    exit;
                } else {
                    $error = "Error: " . $cred_conn->error;
                }
            } else {
                $error = "Username already exists.";
            }
        } else {
            $error = "Passwords do not match.";
        }
    }
}

// Check if 'action' is set to 'register', then show the registration form
if (isset($_GET['action']) && $_GET['action'] === 'register') {
    $show_register = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>

    <!-- Internal Stylesheet for a professional and minimal look -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("images/images-bg.jpeg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .account-form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            color: #555;
            font-size: 14px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #dc143c;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ff0000;
        }

        .error {
            color: red;
            margin-bottom: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }

        .hidden {
            display: none;
        }

        p {
            margin-top: 15px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="account-form">
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <!-- Login Form -->
        <div id="login-form" class="<?php echo $show_register ? 'hidden' : ''; ?>">
            <h2>Login</h2>
            <form method="POST" action="">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
                
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                
                <button type="submit" name="login">Login</button>
            </form>
            <p>Don't have an account? <a href="?action=register">Register</a></p>
        </div>

        <!-- Registration Form -->
        <div id="register-form" class="<?php echo !$show_register ? 'hidden' : ''; ?>">
            <h2>Register</h2>
            <form method="POST" action="">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
                
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" required>
                
                <button type="submit" name="register">Register</button>
            </form>
            <p>Already have an account? <a href="account.php">Login</a></p>
        </div>
    </div>
</body>
</html>
