<?php

session_start();

// Thiết lập giá trị mặc định cho biến session IsLogin là false khi khởi tạo một phiên làm việc mới
if (!isset($_SESSION["IsLogin"])) {
    $_SESSION["IsLogin"] = false;
}

$username = "avnadmin"; 

 

$conn = new mysqli($servername, $username, $password,$dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy thông tin đăng nhập từ form
$username = $_POST['user'];
$password = $_POST['password'];

// Thực hiện truy vấn SQL
$sql = "SELECT * FROM User WHERE TenUser='$username' AND password ='$password'";
$result = $conn->query($sql);

// Kiểm tra kết quả trả về
if ($result->num_rows > 0) {
    // Đăng nhập thành công, đặt biến session
    $_SESSION["IsLogin"] = true;
    header("Location: Sach.php "); // Chuyển hướng đến trang đăng nhập thành công
} else {
    // Đăng nhập thất bại, chuyển hướng về trang đăng nhập
    header("Location: login.html");
}

// Đóng kết nối
$conn->close();
?>
