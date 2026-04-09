<?php
$name = $_GET['name'];
$gender = $_GET['gender'];
$age = $_GET['age'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$meal = $_GET['meal'];
$activities = $_GET['activities'];
$note = $_GET['note'];
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="UTF-8">
<title>報名結果</title>

<style>
body {
    font-family: Arial;
    background: linear-gradient(to right, #56ccf2, #2f80ed);
}

.box {
    width: 400px;
    margin: 100px auto;
    background: white;
    padding: 25px;
    border-radius: 10px;
}

h2 {
    text-align: center;
}

p {
    margin: 8px 0;
}
</style>
</head>

<body>

<div class="box">
<h2>🎉 報名成功！</h2>

<p><b>姓名：</b><?php echo $name; ?></p>
<p><b>性別：</b><?php echo $gender; ?></p>
<p><b>年齡：</b><?php echo $age; ?></p>
<p><b>Email：</b><?php echo $email; ?></p>
<p><b>電話：</b><?php echo $phone; ?></p>
<p><b>餐點：</b><?php echo $meal; ?></p>
<p><b>活動偏好：</b><?php echo $activities; ?></p>
<p><b>備註：</b><?php echo $note; ?></p>

<a href="login.php">回登入頁</a>

</div>

</body>
</html>  