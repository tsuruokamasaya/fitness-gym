<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness-gym</title>
    <link rel="stylesheet" href="css/style.css">
    <?php
    // ページ固有のCSSがあれば読み込む
    if (isset($page_css)) {
        echo '<link rel="stylesheet" href="css/' . htmlspecialchars($page_css) . '">';
    }
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
</head>

<body>
    <header class="header">
        <h1>Fitness-gym</h1>
        <ul class="header-menu">
            <?php if (!empty(($_SESSION['member']))): ?>
                <li>ようこそ、<?= h($_SESSION['member']) ?>さん</li>
                <li><a href="logout.php">ログアウト</a></li>
            <?php else: ?>
                <li><a href="#">ログイン</a></li>
            <?php endif; ?>
            <li><a href="#">about</a></li>
            <li><a href="#">service</a></li>
            <li><a href="#">information</a></li>
            <li><a href="#">ご入会方法</a></li>
            <li><a href="#">SNS</a></li>
            <li><a href="#">お問い合わせ</a></li>
        </ul>
    </header>

    <main>