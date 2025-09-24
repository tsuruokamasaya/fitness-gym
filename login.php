<?php include 'includes/common.php'; ?>

<div>
    <h1>ログインページ</h1>
    <form action="auth.php" method="post">
        <p>
            <label for="username">
                <input type="text" id="username" name="username" placeholder="例）山田　太郎" required>
            </label>
        </p>

        <p>
            <label for="email">
                <input type="text" id="email" name="email" placeholder="例）example@email.com" required>
            </label>
        </p>

        <p>
            <label for="password">
                <input type="password" id="password" name="password" required>
            </label>
        </p>

        <p><input type="submit" value="ログイン"></p>


    </form>
</div>