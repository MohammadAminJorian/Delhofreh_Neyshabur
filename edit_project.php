<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}

include 'db_b_connection.php';

if (isset($_GET['id'])) {
    $projectId = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM projects WHERE id = ?");
    $stmt->bind_param("i", $projectId);
    $stmt->execute();
    $result = $stmt->get_result();
    $project = $result->fetch_assoc();
    $stmt->close();

    if (!$project) {
        echo "<script>alert('پروژه پیدا نشد.'); window.location.href='view_project.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('ID پروژه معتبر نیست.'); window.location.href='view_project.php';</script>";
    exit();
}

// Updating the project details
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = $_POST['category'] ?? '';
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $imagePath = $project['image_path'];  // Keeping old image by default

    // Handling image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            $imagePath = $uploadFile;
        } else {
            echo "Error uploading the image.";
            exit;
        }
    }

    // Update the project in the database
    $stmt = $conn->prepare("UPDATE projects SET category = ?, title = ?, description = ?, image_path = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $category, $title, $description, $imagePath, $projectId);
    if ($stmt->execute()) {
        echo "<script>alert('پروژه با موفقیت ویرایش شد.'); window.location.href='view_project.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش پروژه</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f8;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .form-container {
            max-width: 800px;
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
            font-weight: bold;
        }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group textarea {
            resize: none;
            height: 150px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-group button:hover {
            background-color: #2980b9;
        }
        .image-preview {
            margin-top: 10px;
            text-align: center;
        }
        .image-preview img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>ویرایش پروژه</h2>

    <form action="edit_project.php?id=<?= $project['id'] ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="category">دسته‌بندی:</label>
            <select name="category" id="category" required>
                <option value="building" <?= $project['category'] == 'building' ? 'selected' : '' ?>>ساختمانی</option>
                <option value="road" <?= $project['category'] == 'road' ? 'selected' : '' ?>>راه‌سازی</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">عنوان پروژه:</label>
            <input type="text" name="title" id="title" value="<?= $project['title'] ?>" required>
        </div>
        <div class="form-group">
            <label for="description">توضیحات:</label>
            <textarea name="description" id="description" required><?= $project['description'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="image">تصویر:</label>
            <input type="file" name="image" id="image" accept="image/*">
            <?php if ($project['image_path']): ?>
                <div class="image-preview">
                    <img src="<?= $project['image_path'] ?>" alt="تصویر پروژه">
                </div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <button type="submit">ذخیره تغییرات</button>
        </div>
    </form>

    <div class="form-group">
        <form action="delete_project.php" method="POST" onsubmit="return confirm('آیا مطمئن هستید که می‌خواهید این پروژه را حذف کنید؟');">
            <input type="hidden" name="id" value="<?= $project['id'] ?>">
            <button type="submit" style="background-color: #e74c3c; color: white; border: none; border-radius: 5px; padding: 10px; font-size: 16px; cursor: pointer;">
                حذف پروژه
            </button>
        </form>
    </div>
</div>


</body>
</html>


