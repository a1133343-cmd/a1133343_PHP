<?php
session_start();

// 帳號、密碼、角色
$users = [
    "stu1" => ["pwd" => "1111", "role" => "student"],
    "tch1" => ["pwd" => "2222", "role" => "teacher"],
    "admin" => ["pwd" => "3333", "role" => "admin"]
];

$uID = $_POST['uID'];
$uPWD = $_POST['uPWD'];

if (isset($users[$uID]) && $users[$uID]['pwd'] == $uPWD) {

    // ✅ Session（記住登入狀態）
    $_SESSION['user'] = $uID;
    $_SESSION['role'] = $users[$uID]['role'];

    // ✅ Cookie（記住ID 1小時）
    setcookie("userID", $uID, time() + 3600);

    header("Location: dashboard.php");

} else {
    header("Location: login.php?error=1");
}

exit();
?>