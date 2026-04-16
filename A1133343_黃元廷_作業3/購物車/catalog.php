<?php session_start(); ?>

<h2>商品目錄</h2>

<form action="savecart.php" method="post">
    商品：蘋果 🍎 NT$50
    <input type="hidden" name="name" value="蘋果">
    <input type="hidden" name="price" value="50">
    <button type="submit">加入購物車</button>
</form>

<form action="savecart.php" method="post">
    商品：香蕉 🍌 NT$30
    <input type="hidden" name="name" value="香蕉">
    <input type="hidden" name="price" value="30">
    <button type="submit">加入購物車</button>
</form>

<form action="savecart.php" method="post">
    商品：橘子 🍊 NT$40
    <input type="hidden" name="name" value="橘子">
    <input type="hidden" name="price" value="40">
    <button type="submit">加入購物車</button>
</form>

<br>
<a href="shoppingcart.php">查看購物車 🛒</a>