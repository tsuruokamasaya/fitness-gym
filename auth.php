<?php include 'includes/common.php';

$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

// パスワードをハッシュ化
$hashed = password_hash($password, PASSWORD_DEFAULT);

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password_hash'])) {
    $_SESSION['member'] = $user['username']; // ユーザー名を各ページで共有できるようにセッションに入れる
    $_SESSION['member_id'] = $user['id']; //この時点で、ログインできたユーザーには$_sessionの値が追加され、識別に使える
    header('Location:top.php');
    exit;
} else {
    echo 'ユーザー名またはパスワードが違います。<a href="login.php">戻る</a>';
}
