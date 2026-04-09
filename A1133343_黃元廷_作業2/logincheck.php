<?php
$fID = "derrick";
$fPWD = "12345678";

$uID = $_POST['uID'];
$uPWD = $_POST['uPWD'];

if ($uID == $fID && $uPWD == $fPWD) {
    header("Location: form.html"); // 登入成功
} else {
    header("Location: login.php?error=1"); // 登入失敗
}
exit();
?>