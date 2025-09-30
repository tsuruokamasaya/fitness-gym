<?php
$page_css = 'register.css';
include 'includes/common.php';
?>


<div class="register">
    <h1>新規会員登録</h1>
    <a href="login.php">すでに会員登録済みの方はこちら</a>
    <form action="register_done.php" method="post">
        <p>
            <label for="username">氏名：
                <input type="text" id="username" name="username" placeholder="例）山田　太郎" required>
            </label>
        </p>

        <p>
            <label for="email">メールアドレス：
                <input type="text" id="email" name="email" placeholder="例）example@email.com" required>
            </label>
        </p>

        <p>
            <label for="password">パスワード（半角英数記号のみ使用可能です）：
                <input type="password" id="password" name="password" required>
            </label>
        </p>

        <p><input type="submit" value="送信"></p>
    </form>
</div>

<?php include 'includes/footer.php'; ?>