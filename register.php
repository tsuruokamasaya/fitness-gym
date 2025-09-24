<?php
include 'includes/common.php';
include 'includes/header.php'; ?>


<div>
    <h1>新規会員登録</h1>
    <a href="login.php">すでに会員登録済みの方はこちら</a>
    <form action="register_done.php" method="post">
        <p>
            <label for="username">
                <input type="text" id="username" placeholder="例）山田　太郎" required>
            </label>
        </p>

        <p>
            <label for="email">
                <input type="text" id="email" placeholder="例）example@email.com" required>
            </label>
        </p>

        <p>
            <label for="password">
                <input type="password" id="password" required>
            </label>
        </p>

        <p><input type="submit" value="送信"></p>
    </form>
</div>

<?php include 'includes/footer.php'; ?>