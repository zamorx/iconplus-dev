<?php
session_start();
/* DATABASE CONFIGURATION */
define("BASE_URL", "http://development.local/login/");


function getDB() 
{
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="supportdb";
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