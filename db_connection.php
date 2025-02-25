<?php


$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "contact_data"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("اتصال ناموفق: " . $conn->connect_error);
}
?>
