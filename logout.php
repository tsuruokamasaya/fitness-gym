<?php include 'includes/common.php';
include 'includes/header.php';
$page_css = 'style.css';
$_SESSION = [];

if (session_id() !== '' || isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}
session_destroy();

header('Location: top.php');
exit;
