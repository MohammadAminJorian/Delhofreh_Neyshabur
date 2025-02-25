<?php


$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "my_projects"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("اتصال ناموفق: " . $conn->connect_error);
}
?>
