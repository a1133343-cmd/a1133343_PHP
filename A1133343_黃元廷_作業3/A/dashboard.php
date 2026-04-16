<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$role = $_SESSION['role'];

// 根據角色導頁
if ($role == "student") {
    header("Location: student.php");
} elseif ($role == "teacher") {
    header("Location: teacher.php");
} else {
    header("Location: admin.php");
}

exit();
?>