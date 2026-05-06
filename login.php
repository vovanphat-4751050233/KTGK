<?php
require_once "config.php";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$sql = "SELECT * FROM users WHERE username=? AND password=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username, $password]);

if ($stmt->rowCount() > 0) {
    echo "<span style='color:green'>Đăng nhập thành công</span>";
} else {
    echo "Sai tài khoản hoặc mật khẩu";
}
?>