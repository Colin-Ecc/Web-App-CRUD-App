<?php
/**
* Configuration for database connection
*
*/
$host = "localhost";
$username = "root";
$password = "Stone!4919";
$dbname = "test"; // will use later
$dsn = "mysql:host=$host;dbname=$dbname"; // will use later
$options = array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);