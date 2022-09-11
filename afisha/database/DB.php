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

	
}