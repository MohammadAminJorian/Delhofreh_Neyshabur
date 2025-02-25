<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}

echo 'Max file size: ' . ini_get('upload_max_filesize') . '<br>';
echo 'Max post size: ' . ini_get('post_max_size') . '<br>';
?>
