<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['user'])) {
    header('Location: login.html');
    exit;
}

// Kết nối đến cơ sở dữ liệu và lấy dữ liệu sách
include '/ThiGiuaKy/QLSach/controller/validateuser.php'; // File chứa thông tin kết nối đến cơ sở dữ liệu
$query = "SELECT * FROM Sach LIMIT 5";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sách</title>
</head>
<body>
</body>
</html>
