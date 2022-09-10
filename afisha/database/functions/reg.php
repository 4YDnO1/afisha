<?php
require_once 'DB.php';

$email = htmlspecialchars($_POST['email']);

$sql =
"SELECT
    `password`
FROM
    `user`
WHERE
    `email` = $_POST[email]";


$password = htmlspecialchars($_POST['password']);
$password = password_hash($password);


$sql =
"INSERT INTO
    `user` (email)
FROM
    `user`
WHERE
    `email` = $email";


if ($_POST["action"] === 'register'){
    DB::insert('users', ["login" => $_POST['login'], "password" => $_POST['password']]);
}
