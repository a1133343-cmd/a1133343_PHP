<?php
// 把時間設為過去 → 刪除
setcookie("userID", "", time() - 3600);

header("Location: login.php");
exit();
?>