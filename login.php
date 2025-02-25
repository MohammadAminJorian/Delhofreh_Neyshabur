<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_SESSION['admin_logged_in'])) {
    header('Location: manage_comments.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'db_a_connection.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin_dashboard.php');
        exit();
    } else {
        $error = "نام کاربری یا رمز عبور اشتباه است.";
    }
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title> ورود به مدیریت</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 300px;
            text-align: center;
            transition: width 0.3s ease;
        }
        h2 {
            margin-bottom: 20px;
            color: #2c3e50;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #2980b9;
        }
        .error {
            color: red;
            margin-top: 10px;
        }

        @media (min-width: 768px) {
            .login-container {
                max-width: 400px;
            }
            h2 {
                font-size: 1.8rem;
            }
        }

        @media (min-width: 1024px) {
            .login-container {
                max-width: 500px;
            }
            h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 15px;
                width: 90%;
                max-width: 280px;
            }
            h2 {
                font-size: 1.5rem;
            }
            input[type="text"],
            input[type="password"],
            button {
                font-size: 0.9rem;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>ورود به پنل مدیریت</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="نام کاربری" required>
            <input type="password" name="password" placeholder="رمز عبور" required>
            <button type="submit">ورود</button>
        </form>
        <?php if (isset($error)): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
