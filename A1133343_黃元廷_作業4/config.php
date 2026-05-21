<?php
// 1. 資料庫連接設定
$db_host = 'localhost';
$db_name = 'mail_system';
$db_user = 'root'; 
$db_pass = '';     // 你的 MySQL 密碼
$db_charset = 'utf8mb4';

try {
    $dsn = "mysql:host=$db_host;dbname=$db_name;charset=$db_charset";
    $pdo = new PDO($dsn, $db_user, $db_pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);
} catch (\PDOException $e) {
    die("資料庫連接失敗: " . $e->getMessage());
}

// 2. PHPMailer SMTP 設定資訊 (供 send.php 使用)
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_AUTH', true);
define('SMTP_USER', '');               // 👈 填入你的 Gmail
define('SMTP_PASS', '');               // 👈 你的 Google 應用程式密碼
define('SMTP_SECURE', 'tls');                             // PHPMailer::ENCRYPTION_STARTTLS
define('SMTP_PORT', 587);
define('SMTP_FROM_NAME', '垃圾郵件系統');