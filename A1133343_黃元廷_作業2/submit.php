<?php

// 接收資料
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$meal = $_POST['meal'];
$note = $_POST['note'];

// 陣列轉字串
$activities = "";
if (isset($_POST['activities'])) {
    $activities = implode(", ", $_POST['activities']);
}

// 傳到結果頁
header("Location: result.php?name=$name&gender=$gender&age=$age&email=$email&phone=$phone&meal=$meal&activities=$activities&note=$note");
exit();

?>