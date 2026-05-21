<?php
session_start(); // 啟用 Session 用來把結果傳回給 index.php 顯示
require 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// 根據你的 PHPMailer 實際路徑手動引入 (若用 Composer 請改為 require 'vendor/autoload.php';)
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// 初始化 Session 訊息
$_SESSION['message'] = "";
$_SESSION['progress_logs'] = [];

// ==========================================
// 功能 A：處理新增 Email
// ==========================================
if (isset($_POST['add_email'])) {
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    if ($email) {
        try {
            // 👈 已修正為 emails 資料表
            $stmt = $pdo->prepare("INSERT INTO emails (email) VALUES (?)");
            $stmt->execute([$email]);
            $_SESSION['message'] = "✅ Email 新增成功！";
        } catch (\PDOException $e) {
            $_SESSION['message'] = "❌ 新增失敗（可能 Email 已存在）。";
        }
    } else {
        $_SESSION['message'] = "❌ 請輸入正確的 Email 格式。";
    }
    header("Location: index.php"); // 執行完導回首頁
    exit();
}

// ==========================================
// 功能 B：處理寄信邏輯
// ==========================================
if (isset($_POST['send_mail'])) {
    $send_type = $_POST['send_type']; 
    $random_count = isset($_POST['random_count']) ? (int)$_POST['random_count'] : 0;
    $interval_type = $_POST['interval_type']; 
    $fixed_sec = isset($_POST['fixed_sec']) ? (int)$_POST['fixed_sec'] : 1;
    
    $mail_subject = $_POST['subject'];
    $mail_content = $_POST['content'];

    // 撈取資料
    if ($send_type === 'all') {
        // 👈 第 51 行：已修正為 emails 資料表
        $stmt = $pdo->query("SELECT email FROM emails");
        $targets = $stmt->fetchAll();
    } else {
        // 👈 已修正為 emails 資料表
        $stmt = $pdo->prepare("SELECT email FROM emails ORDER BY RAND() LIMIT ?");
        $stmt->execute([$random_count]);
        $targets = $stmt->fetchAll();
    }

    $total = count($targets);
    $logs = [];
    
    if ($total > 0) {
        $mail = new PHPMailer(true);

        try {
            // 套用 config.php 的設定
            $mail->isSMTP();
            $mail->Host       = SMTP_HOST;
            $mail->SMTPAuth   = SMTP_AUTH;
            $mail->Username   = SMTP_USER;
            $mail->Password   = SMTP_PASS;
            $mail->SMTPSecure = SMTP_SECURE;
            $mail->Port       = SMTP_PORT;
            $mail->CharSet    = 'UTF-8';

            $mail->setFrom(SMTP_USER, SMTP_FROM_NAME);
            $mail->isHTML(true);
            $mail->Subject = $mail_subject;
            $mail->Body    = nl2br($mail_content);

            // 批次寄送迴圈
            foreach ($targets as $index => $target) {
                $current = $index + 1;
                $current_email = $target['email'];
                
                $mail->clearAddresses();
                $mail->addAddress($current_email);
                
                if ($mail->send()) {
                    $logs[] = "進度: [{$current}/{$total}] 成功寄送至 {$current_email}";
                } else {
                    $logs[] = "進度: [{$current}/{$total}] ❌ 寄送至 {$current_email} 失敗";
                }
                
                // 時間間隔
                if ($current < $total) {
                    $delay = ($interval_type === 'fixed') ? $fixed_sec : rand(1, 5);
                    $logs[] = "⏱️ 暫停 {$delay} 秒後繼續...";
                    sleep($delay); 
                }
            }
            $_SESSION['message'] = "🎉 所有郵件發送任務已完成！";

        } catch (Exception $e) {
            $_SESSION['message'] = "❌ SMTP 設定或寄送出錯: {$mail->ErrorInfo}";
        }
    } else {
        $_SESSION['message'] = "❌ 沒有找到符合條件的收件者。";
    }
    
    $_SESSION['progress_logs'] = $logs;
    header("Location: index.php"); // 執行完導回首頁
    exit();
}