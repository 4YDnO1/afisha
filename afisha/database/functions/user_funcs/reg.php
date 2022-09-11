<?php
require_once 'DB.php';

$email = $_POST['email'];
$email = htmlspecialchars(strip_tags($email));

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$res = [
		"status" => false,
		"message" => "Ошибка, введите корректный email"
	];
	http_response_code(400);
	return $res;
}

require_once 'DB.php';
$sql =
"SELECT
    *
FROM
    user AS u
WHERE
    u.email = :email
LIMIT
	0,1";
$stmt = DB::query($sql, ["email" => $email];

$row = $stmt->fetch(PDO::FETCH_ASSOC);
$num = $stmt->rowCount();

if ($num == 0) {
    $password = $_POST['password'];
    $password = htmlspecialchars(strip_tags($password));
    $password = password_hash($password);

    $sql =
    "INSERT INTO
        user (email, password)
    VALUES
        (:email, :password)";

    DB::query($sql, ["email" => $email, "password" => $password]);

    
}





