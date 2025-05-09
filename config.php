<?php

use Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['DB_HOST'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];

$conn = mysqli_connect($host, $username, $password, $dbname, 3306);
if (!$conn) {
  die("Connection Failed:" . mysqli_connect_error());
}

date_default_timezone_set('Asia/Jakarta');
