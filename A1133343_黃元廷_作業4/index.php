<?php
session_start();
require 'config.php';

// 取得目前資料庫總人數
$total_subscribers = $pdo->query("SELECT COUNT(*) FROM emails")->fetchColumn();

// 讀取完 Session 訊息後立刻清空，避免重整網頁時一直重複顯示
$message = isset($_SESSION['message']) ? $_SESSION['message'] : "";
$progress_logs = isset($_SESSION['progress_logs']) ? $_SESSION['progress_logs'] : [];
unset($_SESSION['message']);
unset($_SESSION['progress_logs']);
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>作業：垃圾郵件寄送系統</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 20px auto; padding: 20px; line-height: 1.6; }
        .box { border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; border-radius: 5px; background: #f9f9f9; }
        h2 { margin-top: 0; color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input[type="text"], input[type="email"], textarea, select { width: 100%; padding: 8px; box-sizing: border-box; }
        button { background: #28a745; color: white; padding: 10px 15px; border: none; border-radius: 3px; cursor: pointer; font-size: 16px; }
        button:hover { background: #218838; }
        .alert { padding: 10px; background: #d4edda; color: #155724; border-left: 5px solid #28a745; margin-bottom: 15px; }
        .log-box { background: #222; color: #00ff00; padding: 15px; font-family: monospace; border-radius: 5px; max-height: 250px; overflow-y: auto; }
    </style>
</head>
<body>

    <h1>📧 垃圾郵件寄送系統 </h1>
    
    <?php if ($message): ?>
        <div class="alert"><?php echo $message; ?></div>
    <?php endif; ?>

    <p>目前名單總數：<strong><?php echo $total_subscribers; ?></strong> 筆</p>

    <div class="box">
        <h2>A. 構建資料庫 (新增收件者)</h2>
        <form method="post" action="send.php">
            <div class="form-group">
                <label for="email">Email 位址：</label>
                <input type="email" id="email" name="email" required placeholder="example@mail.com">
            </div>
            <button type="submit" name="add_email" style="background:#007bff">加入資料庫</button>
        </form>
    </div>

    <div class="box">
        <h2>B. 寄送郵件設定與介面</h2>
        <form method="post" action="send.php">
            
            <div class="form-group">
                <label for="subject">郵件標題：</label>
                <input type="text" id="subject" name="subject" required placeholder="請輸入郵件主旨">
            </div>

            <div class="form-group">
                <label for="content">郵件內容：</label>
                <textarea id="content" name="content" rows="5" required placeholder="請輸入郵件內文..."></textarea>
            </div>

            <hr>

            <h3>寄送條件</h3>
            <div class="form-group">
                <label>寄送範圍：</label>
                <input type="radio" name="send_type" value="all" checked id="type_all" onclick="toggleRandomInput(false)"> 全部寄送
                <input type="radio" name="send_type" value="random" id="type_rand" onclick="toggleRandomInput(true)"> 隨機寄送幾筆
                <input type="number" name="random_count" id="random_count" style="width: 80px; display:none;" min="1" placeholder="筆數">
            </div>

            <div class="form-group">
                <label>時間與間隔設定：</label>
                <input type="radio" name="interval_type" value="fixed" checked id="int_fixed" onclick="toggleIntervalInput(true)"> 固定間隔秒數
                <input type="number" name="fixed_sec" id="fixed_sec" style="width: 80px;" min="1" value="2"> 秒
                <br>
                <input type="radio" name="interval_type" value="random_sec" id="int_rand" onclick="toggleIntervalInput(false)"> 隨機間隔寄送 (1~5秒隨機)
            </div>

            <button type="submit" name="send_mail">🚀 開始發送真實郵件</button>
        </form>
    </div>

    <?php if (!empty($progress_logs)): ?>
        <div class="box">
            <h2>📊 寄送進度與日誌 (例如: 5/100)</h2>
            <div class="log-box">
                <?php foreach ($progress_logs as $log): ?>
                    <?php echo $log . "<br>"; ?>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <script>
        function toggleRandomInput(show) {
            document.getElementById('random_count').style.display = show ? 'inline-block' : 'none';
            if(show) document.getElementById('random_count').required = true;
        }
        function toggleIntervalInput(showFixed) {
            document.getElementById('fixed_sec').style.display = showFixed ? 'inline-block' : 'none';
        }
    </script>
</body>
</html>