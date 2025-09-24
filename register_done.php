<?php include 'includes/common.php';

$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

// パスワードをハッシュ化
$hashed = password_hash($password, PASSWORD_DEFAULT);

try {
    $stmt = $pdo->prepare("INSERT INTO users(username, email, password_hash) VALUES (?,?,?)");
    $stmt->execute([$username, $email, $hashed]);
    echo '登録完了！<a href="login.php">ログインする</a>';
} catch (PDOException $e) {
    if ($e->getCode() === '23000') {
        echo 'このユーザー名は既に使われています。<a href="register.php">戻る</a>';
    } else {
        echo "エラー：" . $e->getMessage();
    }
}
