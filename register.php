<?php
include 'includes/common.php';
include 'includes/header.php'; ?>

<div>
    <form action="register_done.php">
        <p>
            <label for="username">
                <input type="text" id="username" placeholder="例）山田　太郎">
            </label>
        </p>

        <p>
            <label for="email">
                <input type="text" id="email" placeholder="例）example@email.com">
            </label>
        </p>

        <p>
            <label for="password">
                <input type="password" id="password">
            </label>
        </p>

        <p><input type="submit" value="送信"></p>
    </form>
</div>

<?php include 'includes/footer.php'; ?>