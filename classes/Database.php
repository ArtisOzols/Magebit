<?php

//connects to database server and executes SQL statements
class Database {
    public static $host = "localhost";
    public static $dbName = "WebDevelopmentTest";
    public static $username = "root";
    public static $password = "";

    //Connects to Mysql server
    private static function con() {
        $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8", self::$username, self::$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    // executes SQL statements
    public static function query($query, $params = array()) {
        $stmt = self::con()->prepare($query);
        $stmt->execute($params);
        if(explode(' ', $query)[0] == 'SELECT') {
            $data = $stmt->fetchAll();
            return $data;  
        }
    }

}