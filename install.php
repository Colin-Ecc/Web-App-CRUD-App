<?php 

// array(
// PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
// )

require "config.php";

try{
$connection = new PDO("mysql:host=localhost", "root", "Stone!4919");
$sql = file_get_contents("data/init.sql");
$connection->exec($sql);
echo "Database and table users created successfully.";
} catch(PDOException $error) {
echo $sql . "<br>" . $error->getMessage();
}
?>