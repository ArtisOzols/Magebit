<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database and tables
$newDb = "CREATE DATABASE webDevelopmentTest ";
$newUsersTable = "CREATE TABLE webDevelopmentTest . users ( name VARCHAR(70) NOT NULL , email VARCHAR(255) NOT NULL PRIMARY KEY, password CHAR(60) NOT NULL) ENGINE = InnoDB";
$newInfoTable = "CREATE TABLE webDevelopmentTest . info ( age TINYINT UNSIGNED NULL , gender VARCHAR(6) NULL , phoneNr VARCHAR(20) NULL , country VARCHAR(50) NULL , city VARCHAR(50) NULL , street VARCHAR(50) NULL, email VARCHAR(255) NOT NULL) ENGINE = InnoDB";

$conn->query($newDb);
$conn->query($newUsersTable);
$conn->query($newInfoTable);
$conn->close();


require_once('Routes.php');                     //autoloads Routes.php

function __autoload($class_name){               //autoloads classes and controllers 

    if(file_exists('./classes/'.$class_name.'.php')){
        require_once './classes/'.$class_name.'.php';         
    } else if(file_exists('./Controllers/'.$class_name.'.php')){
        require_once './Controllers/'.$class_name.'.php';         
    }

}
?>