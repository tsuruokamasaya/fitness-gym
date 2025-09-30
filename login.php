<?php
$page_css = 'login.css';
include 'includes/common.php';
include 'includes/header.php';
?>

<div>
    <h1>ログインページ</h1>
    <form action="auth.php" method="post">
        <p>
            <label for="username">名前：
                <input type="text" id="username" name="username" placeholder="例）山田　太郎" required>
            </label>
        </p>

        <p>
            <label for="email">メールアドレス：
                <input type="text" id="email" name="email" placeholder="例）example@email.com" required>
            </label>
        </p>

        <p>
            <label for="password">パスワード：
                <input type="password" id="password" name="password" required>
            </label>
        </p>

        <p><input type="submit" value="ログイン"></p>
        <p><a href="logout.php">ゲストでサイト閲覧</a></p>


    </form>
</div>