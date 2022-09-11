<?php

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
	u.id, u.password, u.email
FROM
	user AS u
WHERE
	u.email = :email
LIMIT
	0,1";
$stmt = DB::query($sql, ["email" => $email];

$row = $stmt->fetch(PDO::FETCH_ASSOC);
$num = $stmt->rowCount();

if ($num > 0) {
	$password = $_POST['password'];
	$password = htmlspecialchars(strip_tags($password));

	if (password_verify($_POST['password'], $row['password'])) {
		session_start();
		$_SESSION['user']['id'] = $row['id'];
		$_SESSION['user']['email'] = $row['email'];

		setcookie("auth", $hash, time() + 86400);
	}
}


