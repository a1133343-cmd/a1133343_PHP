<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="UTF-8">
<title>登入</title>
</head>

<body>

<h2>登入系統</h2>

<form action="logincheck.php" method="post">
    ID: <input type="text" name="uID" required><br><br>
    Password: <input type="password" name="uPWD" required><br><br>
    <input type="submit" value="登入">
</form>

<?php
if (isset($_GET['error'])) {
    echo "<p style='color:red;'>登入失敗！</p>";
}
?>

</body>
</html>