<?php
require_once 'DB.php';

session_start();

$sql =
"SELECT
    `password`
FROM
    `user`
WHERE
    `email` = $_POST[email]";

$stmt = DB::query($sql, ["email" => $_POST['email']];
$stmt->fetchAllif (password_verify($_POST['password'], )) {
    $_SESSION['user']['email'] = $_POST['email'];
    $_SESSION['user']['email'] = $_POST['email'];
    //setcookie("auth", $hash, time() + 86400);
}

