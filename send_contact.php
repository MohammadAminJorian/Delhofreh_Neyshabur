<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_data";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("اتصال ناموفق: " . $conn->connect_error);
}

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// اصلاح کوئری با توجه به مقادیر ورودی
$sql = "INSERT INTO contacts (full_name, email, subject, message) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("آماده‌سازی پرس‌وجو ناموفق بود: " . $conn->error);
}

// اصلاح پارامترها برای همخوانی با کوئری
$stmt->bind_param("ssss", $full_name, $email, $subject, $message);

if ($stmt->execute()) {
    header("Location: contact.php?success=1");
    exit();
} else {
    echo "خطا در ارسال پیام: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
