<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}

include 'db_i_connection.php';

// بازیابی اطلاعات فعلی
$infoQuery = $conn->query("SELECT * FROM company_info WHERE id = 1");
$info = $infoQuery->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employees_count = intval($_POST['employees_count']);
    $service_years = intval($_POST['service_years']);
    $completed_projects = intval($_POST['completed_projects']);

    $updateQuery = $conn->prepare("UPDATE company_info SET employees_count = ?, service_years = ?, completed_projects = ? WHERE id = 1");
    $updateQuery->bind_param("iii", $employees_count, $service_years, $completed_projects);

    if ($updateQuery->execute()) {
        $success_message = "اطلاعات با موفقیت به‌روزرسانی شد.";
        // به‌روزرسانی اطلاعات نمایش داده شده پس از ویرایش
        $info['employees_count'] = $employees_count;
        $info['service_years'] = $service_years;
        $info['completed_projects'] = $completed_projects;
    } else {
        $error_message = "خطا در به‌روزرسانی اطلاعات: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش اطلاعات شرکت</title>
    <style>
        body {
            font-family: 'IRANSans', sans-serif;
            background: linear-gradient(135deg, #ffffff, #dfefff);
            background-size: 400% 400%;
            animation: gradientBG 10s ease infinite;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 1.1rem;
            color: #555;
            text-align: right;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 1rem;
            text-align: center;
        }

        button {
            padding: 12px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }

        button:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
            transform: scale(1.05);
        }

        .message {
            margin-top: 15px;
            font-size: 1rem;
            color: green;
        }

        .error {
            margin-top: 15px;
            font-size: 1rem;
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>ویرایش اطلاعات شرکت</h2>
    <?php if (isset($success_message)) { echo "<p class='message'>$success_message</p>"; } ?>
    <?php if (isset($error_message)) { echo "<p class='error'>$error_message</p>"; } ?>
    <form method="post" action="">
        <label for="employees_count">تعداد کارکنان شرکت:</label>
        <input type="number" id="employees_count" name="employees_count" value="<?= $info['employees_count'] ?>" required>

        <label for="service_years">تعداد سال‌های خدمات شرکت:</label>
        <input type="number" id="service_years" name="service_years" value="<?= $info['service_years'] ?>" required>

        <label for="completed_projects">تعداد پروژه‌های تکمیل‌شده:</label>
        <input type="number" id="completed_projects" name="completed_projects" value="<?= $info['completed_projects'] ?>" required>

        <button type="submit">ذخیره تغییرات</button>
    </form>
</div>

</body>
</html>
