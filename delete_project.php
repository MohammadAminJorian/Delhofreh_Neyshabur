<?php
include 'db_b_connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $projectId = $_POST['id'];

    $stmt = $conn->prepare("DELETE FROM projects WHERE id = ?");
    $stmt->bind_param("i", $projectId);

    if ($stmt->execute()) {
        echo "<script>alert('پروژه با موفقیت حذف شد.'); window.location.href='view_project.php';</script>";
    } else {
        echo "<script>alert('خطایی در حذف پروژه رخ داد.'); window.location.href='view_project.php';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    header('Location: view_project.php');
    exit();
}
