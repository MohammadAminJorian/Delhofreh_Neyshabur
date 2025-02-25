<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}

include 'db_b_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imagePath = 'uploads/' . basename($_FILES['image']['name']);
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
            $stmt = $conn->prepare("INSERT INTO projects (category, title, description, image_path) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $category, $title, $description, $imagePath);
            
            if ($stmt->execute()) {
                echo "<div class='success-message'>
                        <p>پروژه با موفقیت اضافه شد!</p>
                        <a href='view_project.php' class='btn'>مشاهده پروژه‌ها</a>
                      </div>";
            } else {
                echo "<div class='error-message'>
                        <p>خطا در اضافه کردن پروژه: " . $stmt->error . "</p>
                      </div>";
            }
            
            $stmt->close();
        } else {
            echo "<div class='error-message'>
                    <p>خطا در آپلود تصویر.</p>
                  </div>";
        }
    } else {
        echo "<div class='error-message'>
                <p>خطا در ارسال فایل: " . $_FILES['image']['error'] . "</p>
              </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اضافه کردن پروژه</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f8;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            color: #3498db;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 1rem;
        }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group textarea {
            resize: none;
            height: 100px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #2980b9;
        }
        /* Message Box Styles */
        .success-message {
            padding: 20px;
            background-color: #2ecc71;
            color: white;
            text-align: center;
            border-radius: 8px;
            margin-top: 20px;
        }
        .error-message {
            padding: 20px;
            background-color: #e74c3c;
            color: white;
            text-align: center;
            border-radius: 8px;
            margin-top: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
