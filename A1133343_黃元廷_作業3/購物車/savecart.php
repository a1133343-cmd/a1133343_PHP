<?php
session_start();

// 讀舊購物車（Cookie）
if (isset($_COOKIE['cart'])) {
    $cart = json_decode($_COOKIE['cart'], true);
} else {
    $cart = [];
}

// 新商品
$name = $_POST['name'];
$price = $_POST['price'];

$item = [
    "name" => $name,
    "price" => $price
];

$cart[] = $item;

// 存回 Cookie
setcookie("cart", json_encode($cart), time() + 3600);

// 🔥 Session 傳訊息
$_SESSION['msg'] = "已加入 {$name} 到購物車！";

header("Location: catalog.php");
exit();
?>