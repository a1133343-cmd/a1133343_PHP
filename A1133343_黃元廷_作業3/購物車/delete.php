<?php
session_start();

if (isset($_COOKIE['cart'])) {

    $cart = json_decode($_COOKIE['cart'], true);

    $id = $_GET['id'];
    $removed = $cart[$id]['name']; // 記錄刪掉的商品

    unset($cart[$id]);
    $cart = array_values($cart);

    setcookie("cart", json_encode($cart), time() + 3600);

    //  Session 傳訊息
    $_SESSION['msg'] = "已刪除 {$removed}";
}

header("Location: shoppingcart.php");
exit();
?>