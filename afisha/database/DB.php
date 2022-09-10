<?php

class DB {
	protected static $pdo;

	private static function getConnection(): PDO {
		$dbinfo = require "dbinfo.php";
		if (empty(self::$pdo)) {
			try {   
				self::$pdo = new PDO("mysql:host=$dbinfo[host];dbname=$dbinfo[dbname]", $dbinfo["username"], $dbinfo["password"]);
			} catch (Exception $e) {
				echo 'Error: ' . $e->getMessage() . "\n";
			}
		}
	}

	public static function query($sql, $params = []) {
		$pdo = self::getConnection();
		$stmt = $pdo->prepare($sql);
		foreach ($params as $key => $value) {
			$stmt->bindValue(":$key", $value);
		}
		$stmt->execute();
		return $stmt;
	}

	// public static function select($table, $sql = '', $params = []) {
	// 	$sql = "SELECT * FROM `$table` $sql";
	// 	$stmt = self::query($sql, $params);
	// 	return $stmt->fetchAll(PDO::FETCH_ASSOC);
	// }

	// public static function insert($table, $params) {
	// 	$columns = '';
	// 	$values = '';
	// 	foreach ($params as $key => $value) {
	// 		$columns .= "`$key`,";
	// 		$values  .= ":$key,";
	// 	}
	// 	$columns = substr($columns, 0, -1);
	// 	$values = substr($values, 0, -1);
	// 	$sql = "INSERT INTO `$table` ($columns) VALUES ($values)";
	// 	return self::query($sql, $params);
	// }
}