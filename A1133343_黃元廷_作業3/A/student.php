<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['role'] != "student") {
    header("Location: login.php");
    exit();
}
?>

<h2>學生頁面</h2>

<p>歡迎：<?php echo $_SESSION['user']; ?></p>

<p>Cookie ID：<?php echo $_COOKIE['userID'] ?? "無"; ?></p>

<a href="logout.php">登出</a> |
<a href="clear_cookie.php">刪除Cookie</a>