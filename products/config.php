<?php

$host = 'localhost';
$dbname = 'u593341949_db_cabana';
$username = 'u593341949_dev_cabana';
$password = '20221190Cabana';
/*
$host = 'localhost';
$dbname = 'cabana';
$username = 'root';
$password = ''; */
try {
 $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
 die("Database connection failed: " . $e->getMessage());
}