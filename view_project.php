<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: http://127.0.0.1/login.php');
    exit();
}
include 'db_b_connection.php';

$searchQuery = $_GET['search'] ?? '';
$sortOrder = $_GET['sort'] ?? 'time_desc';

$sql = "SELECT * FROM projects WHERE title LIKE ? OR description LIKE ?";

// اعمال مرتب‌سازی
if ($sortOrder === 'time_asc') {
    $sql .= " ORDER BY created_at ASC";
} elseif ($sortOrder === 'alpha') {
    $sql .= " ORDER BY title ASC";
} else {
    $sql .= " ORDER BY created_at DESC";
}

$stmt = $conn->prepare($sql);
$searchTerm = "%$searchQuery%";
$stmt->bind_param("ss", $searchTerm, $searchTerm);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نمایش پروژه‌ها</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #e8f5ff, #ffffff);
            color: #333;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin: 30px 0;
            font-size: 2.5rem;
            font-weight: bold;
        }
        .search-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .search-container form {
            display: flex;
            gap: 10px;
        }
        .search-container input,
        .search-container select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .search-container button {
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .search-container button:hover {
            background-color: #2980b9;
        }
        .project-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .project-item {
            background: #fff;
            width: 280px;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }
        .project-item img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
        }
        .project-item h3 {
            margin: 10px 0;
            font-size: 1.5rem;
            color: #3498db;
        }
        .project-item p {
            font-size: 1rem;
            color: #555;
            margin: 10px 0;
        }
        .project-item .category {
            font-size: 1rem;
            color: white;
            background-color: #e74c3c; 
            padding: 5px 10px;
            position: absolute;
            top: 10px;
            right: 10px;
            border-radius: 5px;
        }
        .project-item .created-at {
            font-size: 0.9rem;
            color: #888;
            margin-top: auto;
        }
        .edit-button {
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .edit-button:hover {
            background-color: #27ae60;
        }
        /* استایل برای دکمه‌های پایین صفحه */
        .footer-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }
        .footer-buttons a {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
        }
        .footer-buttons a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<h2>نمایش پروژه‌ها</h2>

<!-- فرم جستجو و فیلتر -->
<div class="search-container">
    <form action="" method="GET">
        <input type="text" name="search" placeholder="جستجو بر اساس عنوان یا توضیحات" value="<?= htmlspecialchars($searchQuery) ?>">
        <select name="sort">
            <option value="time_desc" <?= $sortOrder === 'time_desc' ? 'selected' : '' ?>>مرتب‌سازی بر اساس زمان (جدیدترین)</option>
            <option value="time_asc" <?= $sortOrder === 'time_asc' ? 'selected' : '' ?>>مرتب‌سازی بر اساس زمان (قدیمی‌ترین)</option>
            <option value="alpha" <?= $sortOrder === 'alpha' ? 'selected' : '' ?>>مرتب‌سازی بر اساس حروف الفبا</option>
        </select>
        <button type="submit">جستجو</button>
    </form>
</div>

<!-- نمایش پروژه‌ها -->
<div class="project-container">
    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="project-item">
                <img src="<?= htmlspecialchars($row['image_path']) ?>" alt="تصویر پروژه">
                <div class="category"><?= htmlspecialchars($row['category']) ?></div>
                <h3><?= htmlspecialchars($row['title']) ?></h3>
                <p><?= htmlspecialchars($row['description']) ?></p>
                <div class="created-at"><?= htmlspecialchars($row['created_at']) ?></div>
                <!-- دکمه ویرایش -->
                <a href="edit_project.php?id=<?= $row['id'] ?>" class="edit-button">ویرایش پروژه</a>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p style="text-align: center; width: 100%;">پروژه‌ای یافت نشد.</p>
    <?php endif; ?>
</div>

<!-- دکمه‌های پایین صفحه -->
<div class="footer-buttons">
    <a href="admin_dashboard.php">بازگشت به داشبورد</a>
    <a href="add_project.php">اضافه کردن پروژه</a>
</div>

</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
