<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}

include 'db_connection.php';
include 'db_a_connection.php';
include 'db_b_connection.php';

$projectsCount = 0;
$commentsCount = 0;

$projectsCountQuery = $conn->query("SELECT COUNT(*) AS total FROM projects");
if ($projectsCountQuery) {
    $projectsCount = $projectsCountQuery->fetch_assoc()['total'];
} else {
    echo "Error fetching projects count: " . $conn->error;
}

$commentsCountQuery = $conn->query("SELECT COUNT(*) AS total FROM contacts");
if ($commentsCountQuery) {
    $commentsCount = $commentsCountQuery->fetch_assoc()['total'];
} else {
    echo "Error fetching comments count: " . $conn->error;
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد مدیریت</title>
    <style>
        body {
            font-family: 'IRANSans', sans-serif;
            background: linear-gradient(135deg, #ffffff, #dfefff);
            background-size: 400% 400%;
            animation: gradientBG 10s ease infinite;
            color: #333;
            margin: 0;
            padding: 0;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin: 30px 0;
            font-size: 2.8rem;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

        .dashboard-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin: 40px auto;
            max-width: 1200px;
        }

        .dashboard-item {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dashboard-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }

        .dashboard-item h3 {
            margin-bottom: 15px;
            color: #2c3e50;
            font-size: 24px;
        }

        .dashboard-item p {
            font-size: 18px;
            margin: 10px 0;
            color: #555;
        }

        .dashboard-item a, .dashboard-item button {
            display: inline-block;
            padding: 12px 20px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            text-decoration: none;
            border-radius: 15px;
            font-size: 16px;
            margin-top: 15px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .dashboard-item a:hover, .dashboard-item button:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
            transform: scale(1.05);
        }

        .dashboard-item img {
            width: 70px;
            height: 70px;
            margin-bottom: 20px;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.2));
        }

        .action-buttons {
            text-align: center;
            margin: 40px auto;
        }

        .action-buttons button {
            padding: 15px 30px;
            background: linear-gradient(135deg, #ff512f, #dd2476);
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 18px;
            transition: background 0.3s ease, transform 0.2s ease;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .action-buttons button:hover {
            background: linear-gradient(135deg, #dd2476, #ff512f);
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

<h2>داشبورد مدیریت</h2>

<div class="dashboard-container">
    <div class="dashboard-item">
        <img src="https://img.icons8.com/color/96/000000/project.png" alt="پروژه‌ها">
        <h3>پروژه‌ها</h3>
        <p>تعداد پروژه‌ها: <?= $projectsCount ?></p>
        <a href="add_project.php">اضافه کردن پروژه</a>
        <button onclick="window.location.href='view_project.php'">نمایش پروژه‌ها</button>
    </div>
    <div class="dashboard-item">
        <img src="https://img.icons8.com/color/96/000000/comments.png" alt="نظرات">
        <h3>نظرات</h3>
        <p>تعداد نظرات: <?= $commentsCount ?></p>
        <a href="manage_comments.php">مدیریت نظرات</a>
    </div>
    <div class="dashboard-item">
        <img src="https://img.icons8.com/color/96/000000/information.png" alt="سایر اطلاعات">
        <h3>سایر اطلاعات</h3>
        <p>ویرایش اطلاعات بیشتر</p>
        <button onclick="window.location.href='edit_additional_info.php'">ویرایش</button>
    </div>
</div>

<div class="action-buttons">
    <button onclick="window.location.href='logout.php'">خروج از حساب</button>
</div>

</body>
</html>
