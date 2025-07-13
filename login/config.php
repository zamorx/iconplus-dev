<?php
session_start();
// DATABASE CONFIGURATION
define('DB_SERVER', 'iconplus.net');
define('DB_USERNAME', 'iconplus_user');
//define('DB_PASSWORD', 'AdminTA!2020');
define('DB_DATABASE', 'iconplus_supportdb');
define("BASE_URL", "http://development.local/login/");


function getDB() 
{
$dbhost=DB_SERVER;
$dbuser=DB_USERNAME;
$dbpass='AdminTA!2020'; // This line is commented out in the context, but it is needed for the connection
$dbname=DB_DATABASE;
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
