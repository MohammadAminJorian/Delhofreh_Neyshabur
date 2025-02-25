<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}
include 'db_connection.php';

$result = $conn->query("SELECT * FROM contacts ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت نظرات</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7f8;
            color: #333;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
        }
        .comment-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 15px;
            border: 1px solid #ccc;
            text-align: right;
            word-break: break-word; 
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .delete-button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .delete-button:hover {
            background-color: #c0392b;
        }
        .comment-details {
            display: none;
            background-color: #ffffff;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
            text-align: right;
        }
        .view-button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .view-button:hover {
            background-color: #2980b9;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        .logout-button, .refresh-button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background-color 0.3s;
        }
        .logout-button:hover {
            background-color: #2980b9;
        }
        .refresh-button:hover {
            background-color: #2ecc71;
        }
        .refresh-icon {
            width: 16px;
            height: 16px;
            vertical-align: middle;
        }

        @media (max-width: 1200px) {
            th, td {
                padding: 12px;
            }
            .delete-button, .view-button {
                padding: 6px 10px;
                font-size: 14px;
            }
        }

        @media (max-width: 768px) {
            th, td {
                padding: 10px;
            }
            .delete-button, .view-button {
                padding: 5px 8px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            h2 {
                font-size: 20px;
            }
            th, td {
                font-size: 14px;
                padding: 8px;
            }
            .delete-button, .view-button {
                padding: 5px 8px;
                font-size: 12px;
                width: 100%; 
                margin-top: 5px;
            }
            .comment-details {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

<h2>مدیریت نظرات</h2>

<table class="comment-table">
    <tr>
        <th>ID</th>
        <th>نام کامل</th>
        <th>موضوع</th>
        <th>عملیات</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['full_name'] ?></td>
        <td><?= $row['subject'] ?></td>
        <td>
            <button class="view-button" onclick="toggleDetails(<?= $row['id'] ?>)">مشاهده</button>
            <form action="delete_comment.php" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <button type="submit" class="delete-button">حذف</button>
            </form>
        </td>
    </tr>
    <tr id="details-<?= $row['id'] ?>" class="comment-details">
        <td colspan="4">
            <strong>ایمیل:</strong> <?= $row['email'] ?><br>
            <strong>موضوع:</strong> <?= $row['subject'] ?><br>
            <strong>پیام:</strong> <?= $row['message'] ?><br>
            <strong>تاریخ ارسال:</strong> <?= $row['created_at'] ?><br>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<div class="action-buttons">
    <button class="logout-button" onclick="window.location.href='admin_dashboard.php'">بازگشت به داشبورد</button>
    <button class="refresh-button" onclick="location.reload();">
 تازه‌سازی صفحه
    </button>
</div>

<script>
function toggleDetails(id) {
    const detailsRow = document.getElementById('details-' + id);
    if (detailsRow.style.display === 'table-row') {
        detailsRow.style.display = 'none';
    } else {
        detailsRow.style.display = 'table-row';
    }
}

function confirmDelete() {
    return confirm("آیا از حذف این نظر اطمینان دارید؟");
}
</script>

</body>
</html>
