
<form action="logincheck.php" method="post">
    <label for="uID">ID:</label>
    <input type="text" id="uID" name="uID" required>

    <label for="uPWD">Password:</label>
    <input type="password" id="uPWD" name="uPWD" required>

    <button type="submit">登入</button>
</form>

<?php
if (isset($_GET['error'])) {
    echo "<p style='color:red;'>登入失敗！</p>";
}
?>