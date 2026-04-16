<?php

echo "<h2>🛒 購物車</h2>";

if (isset($_COOKIE['cart'])) {

    $cart = json_decode($_COOKIE['cart'], true);
    $total = 0;

    foreach ($cart as $index => $item) {
        echo $item['name'] . " - $" . $item['price'];
        echo " <a href='delete.php?id=$index'>刪除</a><br>";
        $total += $item['price'];
    }

    echo "<h3>總金額：$total</h3>";

} else {
    echo "購物車是空的";
}
?>

<br>
<a href="catalog.php">繼續購物</a>