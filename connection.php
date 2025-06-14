<?php
$host = 'localhost';
$db_name = 'mydata1';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$conn = mysqli_connect($host, $user, $pass, $db_name);
if (!$conn) {
    die(''. mysqli_connect_error());
}


?>