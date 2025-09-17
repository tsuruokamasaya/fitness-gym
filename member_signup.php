<?php
$page_css = 'member_signup.css';
include 'includes/header.php'; ?>

<h2>入会方法</h2>
<p>以下のフォームに入力していただき、確認できましたら登録完了となります。</p>

<div class="vh">
    <form action="register.php" method="POST">
        <p>
            <label>お名前:
                <input type="text" name="name" placeholder="山田　太郎">
            </label>
        </p>

        <p>
            <label>メールアドレス:
                <input type="email" name="email" placeholder="taro.yamada@gmail.com">
            </label>
        </p>

        <p>
            <label>パスワード(半角英数のみ有効です)
                <input type="text" name="pass" value="">
            </label>
        </p>

        <input type="submit" value="送信">
    </form>
</div>


















<?php include 'includes/footer.php'; ?>