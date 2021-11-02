<?php 


$points = 51;


$host = "localhost";
$db = "bit-shop";
$user = "bit-shop";
$pass = "ucu1btb3bkx!gxu9UZR";
$charset = "utf8mb4";
$dsn = "mysql:host=$host; dbname=$db; charset=$charset";
$id = $_GET['id'];

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage());
}



?>