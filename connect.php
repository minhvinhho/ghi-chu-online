<?php
$db  = new PDO("mysql:host=localhost;dbname=ghichu", "root", "");
$host = 'localhost'; // 127.0.0.1
$user = 'root'; // User đăng nhập MySQL
$password = ''; // Password đăng nhập MySQL
$database = 'ghichu'; // Tên cơ sở dữ liệu
$connect = mysqli_connect($host, $user, $password, $database) or die('Not connect');
date_default_timezone_set("Asia/Ho_Chi_Minh"); // Thiết lập múi giờ chuẩn
?>