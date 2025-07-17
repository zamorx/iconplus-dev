<?php
session_start();
// DATABASE CONFIGURATION
require_once '../app/Model/config.php';
define("BASE_URL", "http://development.local/login/");


function getDB() 
{
$dbhost=DB_HOST;
$dbuser=DB_USER;
$dbpass=DB_PASSWORD;
$dbname=DB_NAME;
try {
$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $dbConnection;
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

}
