<?php

// $host = 'localhost';
// $dbname = 'parane1';
// $username = 'root';
// $password = '';

define('DB_SERVER', 'localhost');
define('DB_NAME', 'u593341949_db_balagan');
define('DB_USERNAME', 'u593341949_dev_balagan');
define('DB_PASSWORD', '20221557Balagan');

// try {
//  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//  die("Database connection failed: " . $e->getMessage());
// }

try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>